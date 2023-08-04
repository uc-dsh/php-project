(function () {
    const hidden_question = $("#question_no");
    const loaded_store = JSON.parse(localStorage.getItem("selected_options"));
    const currentDate = new Date();
    const start_time = $("#start_time").data("time");
    const answer_status_el = $(".answer_status");
    function twoDigit(number) {
        if (number <= 9) {
            return "0" + number;
        }
        return number;
    }

    function question_filter(style) {
        $(".question_list").each(function () {
            if ($(this).children("span.badge-attempted").css('display') == style) {
                $(this).hide(300);
            } else {
                $(this).show(300);
            }
        });
    }

    function submitTest(answers) {
        $.ajax({
            url: "./conf/submit-answers.php",
            type: "POST",
            data: { answers },
            success: function (response) {
                const result = JSON.parse(response);
                if (result.status === 200) {
                    localStorage.setItem("selected_options", '{}');
                    window.location.assign("./result.php");
                }
            }
        });
    }


    $(document).on("click", ".unattempted_filter", function () {
        question_filter("inline-block");
    });

    $(document).on("click", ".attempted_filter", function () {
        question_filter("none");
    });

    $(document).on("click", ".all_filter", function () {
        $(".question_list").each(function () {
            $(this).show(300);
        });
    });


    if (start_time) {
        const [hour, min, sec] = start_time.split(":");
        const start_stamp = new Date(
            currentDate.getFullYear(),
            currentDate.getMonth(),
            currentDate.getDate(),
            Number(hour),
            Number(min) + 30,
            Number(sec)
        );

        setInterval(() => {
            const currentTime = new Date();
            const time_diff = (start_stamp - currentTime);
            // const left_hours = Math.floor(time_diff / (1000 * 60 * 60));
            const left_minutes = Math.floor((time_diff % (1000 * 60 * 60)) / (1000 * 60));
            const left_seconds = Math.floor((time_diff % (1000 * 60)) / 1000);
            if (left_seconds < 0) {
                submitTest(localStorage.getItem("selected_options"));
            }
            $("#start_time").text(`${twoDigit(left_minutes)}:${twoDigit(left_seconds)}`);
        }, 1000);
    }

    if (answer_status_el) {
        console.log("hii");
        if (answer_status_el.data("correct") === "yes") {
            $("#answer_status_container").html(`<span class="bg-success badge p-2 text-white answer_status">Correct</span>`);
        } else {
            $("#answer_status_container").html(`<span class="bg-danger badge p-2 text-white answer_status">Incorrect</span>`);
        }
    }


    if (hidden_question && loaded_store) {
        $(`#${loaded_store[hidden_question.val()]}`).trigger("click");
        for (const key in loaded_store) {
            $(`#question_a_${key}`).show();
            $(`#question_u_${key}`).hide();
        }
    }

    $(document).on("change", ".answer_options", function () {
        const q_id = $(this).attr("data-question");
        const option_id = $(this).attr("id");
        let old_answer_store = JSON.parse(localStorage.getItem("selected_options"));
        if (!old_answer_store) {
            answer_store = {};
        }
        answer_store = { ...old_answer_store };
        answer_store[q_id] = option_id;
        localStorage.setItem("selected_options", JSON.stringify(answer_store));
    });

    $(document).on("click", ".end_test_button", function () {
        submitTest(localStorage.getItem("selected_options"));
    });


    $(document).on("click", ".open_end_modal", function () {
        const total_attempted = Object.keys(JSON.parse(localStorage.getItem("selected_options"))).length;
        let unattempted_no = 11 - total_attempted;
        $("#end_modal_unattempted").text(unattempted_no);
        $("#end_modal_attempted").text(total_attempted);
    });

})();