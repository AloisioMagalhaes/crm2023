<template>
    <!-- Contêiner para uma lista de tarefas -->
    <div data-section="s-approved" class="task-list-container" data-connect="sorting">

        <!-- Contêiner para os controles de ordenação da lista de tarefas -->
        <div class="connect-sorting">

            <!-- Cabeçalho para a lista de tarefas -->
            <div class="task-container-header">

                <!-- Título da lista de tarefas -->
                <h6 class="s-heading" data-listtitle="New">
                    <!-- O título da lista de tarefas pode ser alterado dinamicamente -->
                </h6>

                <!-- Menu suspenso com opções para editar, excluir e limpar a lista de tarefas -->
                <div class="dropdown">

                    <!-- Ícone do menu suspenso -->
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                            <circle cx="12" cy="12" r="1" />
                            <circle cx="19" cy="12" r="1" />
                            <circle cx="5" cy="12" r="1" />
                        </svg>
                    </a>

                    <!-- Opções do menu suspenso -->
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink-3">
                        <a class="dropdown-item list-edit" href="javascript:void(0);">Edit</a>
                        <a class="dropdown-item list-delete" href="javascript:void(0);">Delete</a>
                        <a class="dropdown-item list-clear-all" href="javascript:void(0);">Clear All</a>
                    </div>

                </div>

            </div>

            <!-- Contêiner para as tarefas -->
            <div class="connect-sorting-content ui-sortable" data-sortable="true">

                <!-- As tarefas são adicionadas aqui -->

            </div>

            <!-- Botão para adicionar uma nova tarefa à lista -->
            <div class="add-s-task">
                <a class="add-task">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle">
                        <path d="M12 8v8m-4-4h8" />
                        <circle cx="12" cy="12" r="10" />
                    </svg>
                    Add Task
                </a>
            </div>

        </div>

    </div>

</template>
<?php
$icon_menu = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>';
$icon_calendario = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
';
$icon_lapis = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 s-task-edit"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
';
$icon_lixeira = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 s-task-delete"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
';
?>