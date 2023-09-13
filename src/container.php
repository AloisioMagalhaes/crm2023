<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container sidebar-closed sbar-open" id="container">
    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <!-- MAIN-CONTAINER-SCRUM -->
            <div class="row scrumboard" id="cancel-row">
                <!-- CONTAINER-SCRUM-LAYOUT -->
                <div class="col-lg-12 layout-spacing">
                    <!-- SCRUM-LAYOUT-TASK-LIST -->
                    <div class="task-list-section">
                        <!-- BUTTON Add List -->
                        <div class="action-btn layout-top-spacing mb-5">
                            <button id="add-list" class="btn btn-dark">Add List</button>
                        </div>
                        
                        <!-- addTaskModal-->
                        <dom-module id="modal_01_addTaskModal">
                            <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog"
                                aria-labelledby="addTaskModalTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="compose-box">
                                                <div class="compose-content" id="addTaskModalTitle">
                                                    <h5 class="add-task-title">Add Task</h5>
                                                    <h5 class="edit-task-title">Edit Task</h5>

                                                    <div class="addTaskAccordion" id="add_task_accordion">
                                                        <div class="card task-text-progress">
                                                            <div id="collapseTwo" class="collapse show"
                                                                aria-labelledby="headingTwo"
                                                                data-parent="#add_task_accordion">
                                                                <div class="card-body">
                                                                    <form action="javascript:void(0);">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="task-title mb-4">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                                                                                    <input id="s-task" type="text"
                                                                                        placeholder="Task"
                                                                                        class="form-control"
                                                                                        name="task">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="task-badge">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><path d="m12 2 3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                                                                    <textarea id="s-text"
                                                                                        placeholder="Task Text"
                                                                                        class="form-control"
                                                                                        name="taskText"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><path d="M18 6 6 18M6 6l12 12"/></svg>Discard</button>
                                            <button data-btnfn="addTask" class="btn add-tsk">Add Task</button>
                                            <button data-btnfn="editTask" class="btn edit-tsk"
                                                style="display: none;">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </dom-module>
                        
                        <!-- addListModal -->
                        <dom-module id="modal_02_addListModal">
                            <div class="modal fade" id="addListModal" tabindex="-1" role="dialog"
                                aria-labelledby="addListModalTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="compose-box">
                                                <div class="compose-content" id="addListModalTitle">
                                                    <h5 class="add-list-title">Add List</h5>
                                                    <h5 class="edit-list-title">Edit List</h5>
                                                    <form action="javascript:void(0);">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="list-title">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><path d="M8 6h13M8 12h13M8 18h13M3 6h0m0 6h0m0 6h0"/></svg>
                                                                    <input id="s-list-name" type="text"
                                                                        placeholder="List Name" class="form-control"
                                                                        name="task">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><path d="M18 6 6 18M6 6l12 12"/></svg> Discard</button>
                                            <button class="btn add-list">Add List</button>
                                            <button class="btn edit-list" style="display: none;">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </dom-module>

                        <!-- deleteModal -->
                        <dom-module id="modal_03_deleteModal">
                            <!-- Modal -->
                            <div class="modal fade" id="deleteConformation" tabindex="-1" role="dialog"
                                aria-labelledby="deleteConformationLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content" id="deleteConformationLabel">
                                        <div class="modal-header">
                                            <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><path d="M3 6h18m-2 0v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m-6 5v6m4-6v6"/></svg>
                                            </div>
                                            <h5 class="modal-title" id="exampleModalLabel">Delete the task?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="">If you delete the task it will be gone forever. Are you sure you
                                                want to proceed?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-danger"
                                                data-remove="task">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </dom-module>

                        <?php require('colunas.php');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>