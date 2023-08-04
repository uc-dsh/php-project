{include file="./inc/head.tpl"}
<div class="container my-3">
    <div class="row m-0">
    <h4 class="text-center">Result</h4>
        <div class="col-12 mx-0 d-flex justify-content-center my-4 row">
            <div class="col-md-2 text-center">
                <div class="bg-white rounded shadow p-2 bg-opacity-25">
                    <h5 class="mb-0">{$RESULT["percentage"]|substr:0:4}%</h5>
                    <p class="mb-0">Result</p>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="bg-white rounded shadow p-2 bg-opacity-25">
                    <h5 class="mb-0">{$RESULT["correct"]}</h5>
                    <p class="mb-0">Correct</p>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="bg-white rounded shadow p-2 bg-opacity-25">
                    <h5 class="mb-0">{$RESULT["wrong"]}</h5>
                    <p class="mb-0">Wrong</p>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="bg-white rounded shadow p-2 bg-opacity-25">
                    <h5 class="mb-0">{$RESULT["unattempted"]}</h5>
                    <p class="mb-0">Unattempted</p>
                </div>
            </div>
        </div>
        <table class="table border mb-5 border-dark">
            <thead>
                <tr class="table-dark">
                    <th>Q. No.</th>
                    <th>Question</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                {foreach $QUESTIONS as $question}
                    <tr>
                        <td>{$question@iteration}</td>
                        <td>
                            <a href={"./result.php?question="|cat:$question@iteration}
                                class="text-decoration-none text-dark">
                                <b class="badge bg-secondary me-2"></b>
                                {$question["snippet"]}
                            </a>
                        </td>
                        <td>
                            {foreach $OPTIONS[$question@iteration ] as $option_key => $iter_option}
                                {assign var="option_class" value='"rounded-pill badge border border-secondary text-muted"'}
                                {if isset($ANSWERS[$question@iteration ]) && $ANSWERS[$question@iteration ] == "option"|cat:$option_key && $iter_option === "1"}
                                    {assign var="option_class" value='"rounded-pill badge bg-success border border-2 border-secondary text-white"'}
                                {elseif isset($ANSWERS[$question@iteration ]) && $ANSWERS[$question@iteration ] == "option"|cat:$option_key && $iter_option === "0"}
                                    {assign var="option_class" value='"rounded-pill badge bg-danger border border-2 border-danger text-white"'}
                                {elseif $iter_option === "1"}
                                    {assign var="option_class" value='"rounded-pill badge border border-2 text-success border-success"'}
                                {/if}
                                <span class={$option_class}>
                                    {$iter_option@iteration}
                                </span>
                            {/foreach}
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</div>
<div
    class="bg-secondary bg-opacity text-white p-2 w-auto position-fixed bottom-0 end-0 d-flex align-items-center justify-content-evenly flex-wrap">
    <div class="d-flex mb-2 mb-md-0 align-items-center">
        <a class="px-4 mx-4 btn btn-light fw-bold" href="./index.php">Dashboard</a>
    </div>
</div>
{include file="./inc/footer.tpl"}