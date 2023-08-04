{include file="./inc/head.tpl"}
<div class="container">
    <div class="row ">
        <div class="w-100 text-center">
            <h3 class="my-4" id="answer_status_container">
            </h3>
        </div>
        <div class="col-12">
            <h6><b>Q{$QUESTION_NO}.</b> {$QUESTIONS['question']}</h6>
        </div>
        <form id="submit_answer" class="mt-2">
            <input type="hidden" value={$QUESTION_NO} id="question_no" />
            {assign var="is_wrong" value=true}
            {foreach $OPTIONS[$QUESTION_NO] as $option_key => $iter_option}
                {assign var="option_class" value='"form-check-label mt-2 ms-2 text-muted"'}
                {if isset($ANSWERS[$QUESTION_NO]) && $ANSWERS[$QUESTION_NO] == "option"|cat:$option_key && $iter_option === "1"}
                    {assign var="is_wrong" value=false}
                    {assign var="option_class" value='"form-check-label mt-2 ms-2 text-success"'}
                {elseif isset($ANSWERS[$QUESTION_NO]) && $ANSWERS[$QUESTION_NO] == "option"|cat:$option_key && $iter_option === "0"}
                    {assign var="option_class" value='"form-check-label mt-2 ms-2 text-danger"'}
                {elseif $iter_option === "1"}
                    {assign var="option_class" value='"form-check-label mt-2 ms-2 text-success wrong"'}
                {/if}
                <div class="col-12 d-flex">
                    <div class="input-group mb-3 ">
                        <span class="input-group-text" id="basic-addon1">
                            {cycle values="A ,B ,C, D "}
                            <input type="radio" value={$option_key}
                                {if $option_class === '"form-check-label mt-2 ms-2 text-danger"'} checked
                                {elseif $option_class === '"form-check-label mt-2 ms-2 text-success"'} checked 
                                {/if}
                                disabled class="option mb-1 ms-2 form-check-input" />
                        </span>
                        <label class={$option_class}>{$QUESTIONS["answers"][$iter_option@iteration -1]["answer"]}</label>
                        {if $option_class === '"form-check-label mt-2 ms-2 text-danger"'}
                            <img src="./assets/images/wrong.png" class="img-fluid answer_indicator" />
                        {elseif $option_class === '"form-check-label mt-2 ms-2 text-success"' || $option_class === '"form-check-label mt-2 ms-2 text-success wrong"'}
                            <img src="./assets/images/right.png" class="img-fluid answer_indicator" />
                        {/if}
                    </div>
                </div>
            {/foreach}
        </form>
    </div>


    {if $is_wrong}
        <span class="d-none answer_status" data-correct="no">Incorrect</span>
    {else}
        <span class="d-none answer_status" data-correct="yes">Correct</span>
    {/if}

    <div class="col-12 mt-5">
        <h5 class="border-bottom border-dark">Explanation</h5>
        <p>{$QUESTIONS['explanation']|nl2br}</p>
    </div>
</div>


<div
    class="bg-secondary text-white p-2 w-auto position-fixed bottom-0 end-0 d-flex align-items-center justify-content-evenly flex-wrap">
    <div class="d-flex mb-2 mb-md-0 align-items-center">
        <a class="px-4 mx-4 btn btn-light fw-bold" href="./result.php">Go Back</a>
        {if $QUESTION_NO>1}
            <a class=" px-4 mx-4 btn btn-light fw-bold" href={"./result.php?question="|cat:$QUESTION_NO-1}>Previous</a>
        {else}
            <button class="px-4 mx-4 btn btn-light text-danger fw-bold" disabled>Previous</button>
        {/if}

        {if $QUESTION_NO < 11}
            <a class="px-4 mx-4 btn btn-light fw-bold" href={"./result.php?question="|cat:$QUESTION_NO+1}>Next</a>
        {else}
            <button class="px-4 mx-4 btn btn-light text-danger fw-bold" disabled>Next</button>
        {/if}
    </div>
</div>
{include file="./inc/footer.tpl"}