<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Questions</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div>
            <div class="row mx-0 mb-3">

                <div class="btn-group">
                    <input type="radio" class="btn-check" name="options-base" id="option5" autocomplete="off" checked>
                    <label class="btn btn-outline-primary all_filter" for="option5">All</label>

                    <input type="radio" class="btn-check" name="options-base" id="option6" autocomplete="off">
                    <label class="btn btn-outline-primary attempted_filter" for="option6">Attempted</label>

                    <input type="radio" class="btn-check" name="options-base" id="option8" autocomplete="off">
                    <label class="btn btn-outline-primary unattempted_filter" for="option8">Unattempted</label>
                </div>
                {* <div class="col-2 ps-0">
                    <div class="p-2 text-center btn w-100 bg-primary bg-opacity-25 all_filter">
                        All
                    </div>
                </div>
                <div class="col-5 p-0">
                    <div class="p-2 text-center btn w-100 bg-success bg-opacity-25 attempted_filter">
                        Attempted
                    </div>
                </div>
                <div class="col-5 pe-0">
                    <div class="p-2 text-center btn w-100 bg-warning bg-opacity-25 unattempted_filter">
                        Unattempted
                    </div>
                </div> *}
            </div>
            <ul class="list-group">
                {foreach $ALL_QUESTIONS as $question}
                    <li class="list-group-item question_list">
                        <a href={"./test.php?question="|cat:$question@iteration}
                            class="h-100 text-dark fs-smaller text-decoration-none">
                            <span class="badge bg-secondary me-2">{$question@iteration}</span>
                            {$question["snippet"]|substr:0:51}
                        </a>
                        <span class="badge fs-10 badge-attempted bg-success" style="display: none;"
                            id={"question_a_"|cat:$question@iteration}>Attempted</span>
                        <span class="badge fs-10 badge-unattempted bg-warning"
                            id={"question_u_"|cat:$question@iteration}>Unattempted</span>
                    </li>
                {/foreach}
            </ul>
        </div>
    </div>
</div>