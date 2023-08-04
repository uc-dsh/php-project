{include file="./inc/head.tpl"}
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h6><b>Q{$QUESTION_NO}.</b> {$QUESTION['question']}</h6>
        </div>
        <form id="submit_answer" class="mt-2">
            <input type="hidden" value={$QUESTION_NO} id="question_no" />
            {foreach $QUESTION["answers"] as $answers}
                <div class="col-12 d-flex">
                    <div class="input-group mb-3 ">
                        <span class="input-group-text" id="basic-addon1">
                            {cycle values="A ,B ,C, D "}
                            <input type="radio" value={$answers["id"]} data-question={$QUESTION_NO}
                                id={"option"|cat:$answers["id"]} name="option"
                                class="form-check-input mb-1 ms-2 option answer_options" />
                        </span>
                        <label class="form-check-label mt-2 ms-2"
                            for={"option"|cat:$answers["id"]}>{$answers["answer"]}</label>
                    </div>
                </div>
            {/foreach}
        </form>
    </div>
</div>
<div
    class="bg-secondary text-white w-min-60 p-2 position-fixed end-10 d-flex align-items-center justify-content-evenly flex-wrap">
    <h5 class="mb-2 mb-md-0 mx-3" id="start_time" data-time={$START_TIME}>00:00</h5>
    <button class="px-4 mb-2 mb-md-0 btn btn-light fw-bold" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">List</button>
    <div class="d-flex mb-2 mb-md-0 align-items-center">
        {if $QUESTION_NO>1}
            <a class="px-4 ms-5 btn btn-light fw-bold" href={"./test.php?question="|cat:$QUESTION_NO-1}>Previous</a>
        {else}
            <button class="px-4 ms-5 btn btn-light text-danger fw-bold" disabled>Previous</button>
        {/if}
        <h5 class="mb-0 ms-3 me-3 text-nowrap">{$QUESTION_NO} of 11</h5>
        {if $QUESTION_NO<11}
            <a class="px-4 me-5 btn btn-light fw-bold" href={"./test.php?question="|cat:$QUESTION_NO+1}>Next</a>
        {else}
            <button class="px-4 me-5 btn btn-light text-danger fw-bold" disabled>Next</button>
        {/if}
    </div>
    <button class="px-4 btn mb-2 mb-md-0 btn-light fw-bold open_end_modal" data-bs-toggle="modal"
        data-bs-target="#end_test_modal">End</button>
</div>
<div class="modal fade" id="end_test_modal">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header py-2">
                <h5 class="modal-title ">Confirmation</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
            <p>This action will end your test. Do you want to proceed?</p>
                <div class="row m-0">
                    <div class="col-4 ps-0">
                        <div class="text-center p-2 bg-light">
                            <h4 class="mb-0 text-primary">11</h4>
                            <p class="mb-0">Total</p>
                        </div>
                    </div>
                    <div class="col-4 p-0">
                        <div class="text-center p-2 bg-light">
                            <h4 class="mb-0 text-success" id="end_modal_attempted">0</h4>
                            <p class="mb-0">Attempted</p>
                        </div>
                    </div>
                    <div class="col-4 pe-0">
                        <div class="text-center p-2 bg-light">
                            <h4 class="mb-0 text-warning" id="end_modal_unattempted">0</h4>
                            <p class="mb-0">Unattempted</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer py-2">
                <button class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                <button class="btn btn-outline-danger end_test_button">End Test</button>
            </div>
        </div>
    </div>
</div>


{include file="./inc/list.tpl"}
{include file="./inc/footer.tpl"}