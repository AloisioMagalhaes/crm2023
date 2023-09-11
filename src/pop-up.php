<?php
// O modal de tarefa é usado para adicionar ou editar uma tarefa.
// O modal de lista é usado para adicionar ou editar uma lista.
// O modal pergunta ao usuário se ele tem certeza de que deseja excluir o item e fornece um botão para cancelar a operação e um botão para confirmar a exclusão.
// Contêiner para uma lista de tarefas 'SCRUMBOARD'
?>
<template>
    <!-- Modal fade -->
    <div class="modal fade" id="add-task-modal" tabindex="-1" role="dialog" aria-labelledby="add-task-modal-title" aria-hidden="true">

        <!-- Modal dialog -->
        <div class="modal-dialog modal-dialog-centered" role="document">

            <!-- Modal content -->
            <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body">

                    <!-- Compose box -->
                    <div class="compose-box">

                        <!-- Compose content -->
                        <div class="compose-content" id="add-task-modalTitle">

                            <!-- Title -->
                            <h5 class="add-task-title">Add Task</h5>
                            <h5 class="edit-task-title">Edit Task</h5>

                            <!-- Accordion -->
                            <div class="add-task-accordion" id="add_task_accordion">
                                <div class="card task-text-progress">
                                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#add_task_accordion">

                                        <!-- Form fields -->
                                        ...

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">

                    <!-- Discard button -->
                    <button class="btn" data-dismiss="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <path d="M18 6 6 18M6 6l12 12" />
                        </svg>
                        Discard
                    </button>

                    <!-- Add task button -->
                    <button data-btnfn="add-task" class="btn add-tsk">
                        Add Task
                    </button>

                    <!-- Edit task button -->
                    <button data-btnfn="editTask" class="btn edit-tsk" style="display: none">
                        Save
                    </button>

                </div>

            </div>

        </div>

    </div>
</template>
<template>
    <!-- Modal fade -->
    <div class="modal fade" id="addListModal" tabindex="-1" role="dialog" aria-labelledby="addListModalTitle" aria-hidden="true">

        <!-- Modal dialog -->
        <div class="modal-dialog modal-dialog-centered" role="document">

            <!-- Modal content -->
            <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body">

                    <!-- Compose box -->
                    <div class="compose-box">

                        <!-- Compose content -->
                        <div class="compose-content" id="addListModalTitle">

                            <!-- Title -->
                            <h5 class="add-list-title">Add List</h5>
                            <h5 class="edit-list-title">Edit List</h5>

                            <!-- Form fields -->
                            <form action="javascript:void(0);">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="list-title">
                                            <!-- Title icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                                <path d="M8 6h13M8 12h13M8 18h13M3 6h0m0 6h0m0 6h0" />
                                            </svg>
                                            <!-- List name -->
                                            <input id="s-list-name" type="text" placeholder="List Name" class="form-control" name="task">
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">

                    <!-- Discard button -->
                    <button class="btn" data-dismiss="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <path d="M18 6 6 18M6 6l12 12" />
                        </svg>
                        Discard
                    </button>

                    <!-- Add list button -->
                    <button class="btn add-list" data-btnfn="add-list">Add List</button>

                    <!-- Edit list button -->
                    <button class="btn edit-list" style="display: none" data-btnfn="edit-list">
                        Save
                    </button>

                </div>

            </div>

        </div>

    </div>

</template>
<template>
    <!-- Modal fade -->
    <div class="modal fade" id="deleteConformation" tabindex="-1" role="dialog" aria-labelledby="deleteConformationLabel" aria-hidden="true">

        <!-- Modal dialog modal-dialog-centered -->
        <div class="modal-dialog modal-dialog-centered" role="document">

            <!-- Modal content -->
            <div class="modal-content" id="deleteConformationLabel">

                <!-- Modal header -->
                <div class="modal-header">

                    <!-- Icon -->
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                            <path d="M3 6h18m-2 0v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m-6 5v6m4-6v6" />
                        </svg>
                    </div>

                    <!-- Modal title -->
                    <h5 class="modal-title" id="exampleModalLabel">
                        <!-- Título do modal -->
                        Delete the task?
                    </h5>

                    <!-- Close button -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <!-- Botão para cancelar a operação -->
                        <span aria-hidden="true"><svg width="8" height="8" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.41 0 0 1.41l.72.72L2.5 3.94.72 5.72 0 6.41l1.41 1.44.72-.72 1.81-1.81 1.78 1.81.69.72 1.44-1.44-.72-.69-1.81-1.78 1.81-1.81.72-.72L6.41 0l-.69.72L3.94 2.5 2.13.72 1.41 0z" />
                            </svg></span>
                    </button>

                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <!-- Text -->
                    <p class="">
                        <!-- Texto que explica as consequências da exclusão do item -->
                        If you delete the task it will be gone forever. Are you sure
                        you want to proceed?
                    </p>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">

                    <!-- Cancel button -->
                    <button type="button" class="btn" data-dismiss="modal">
                        <!-- Botão para cancelar a operação -->
                        Cancel
                    </button>

                    <!-- Delete button -->
                    <button type="button" class="btn btn-danger" data-remove="task">
                        <!-- Botão para confirmar a exclusão -->
                        Delete
                    </button>

                </div>

            </div>

        </div>

    </div>

</template>