<?php

?>
  <style type="text/css" media="all">
    *,
    ::before,
    ::after {
      box-sizing: border-box;
    }

    head,
    meta,
    title,
    style,
    link,
    script {
      display: none;
    }

    .modal-backdrop {
      background-color: #888ea8;
    }

    .modal-backdrop.show {
      opacity: 0.7;
    }

    #addListModal .modal-dialog {
      max-width: 345px;
    }

    #addListModal .modal-content {
      border: 0;
      box-shadow: 0 0 15px 1px rgba(113, 106, 202, 0.2);
    }

    #addListModal .compose-box h5 {
      font-weight: 700;
      font-size: 18px;
      color: #3b3f5c;
      text-align: center;
      margin-bottom: 38px;
    }

    #addListModal .compose-box .list-title {
      display: flex;
    }

    #addListModal .compose-box .list-title svg {
      align-self: center;
      font-size: 19px;
      margin-right: 14px;
      color: #4361ee;
      font-weight: 600;
    }

    #addListModal .compose-box .list-title input {
      border: 0;
      padding: 10px 16px;
      -webkit-box-shadow: 2px 5px 17px 0 rgba(31, 45, 61, 0.1);
      box-shadow: 2px 5px 17px 0 rgba(31, 45, 61, 0.1);
    }

    #addListModal .compose-box .list-title input::-webkit-input-placeholder {
      color: #bfc9d4;
      font-weight: 600;
    }

    #addListModal .compose-box .list-title input::-ms-input-placeholder {
      color: #bfc9d4;
      font-weight: 600;
    }

    #addListModal .compose-box .list-title input::-moz-placeholder {
      color: #bfc9d4;
      font-weight: 600;
    }

    #addListModal .modal-footer {
      justify-content: center;
      border: 0;
      padding: 23px 20px;
    }

    #addListModal .modal-footer .btn[data-dismiss="modal"] {
      background-color: #fff;
      color: #4361ee;
      font-weight: 700;
      border: 1px solid #e0e6ed;
      padding: 10px 25px;
    }

    #addListModal .modal-footer .edit-list {
      background-color: #009688;
      color: #fff;
      font-weight: 600;
      border: 1px solid #e0e6ed;
      padding: 10px 25px;
    }

    #addListModal .modal-footer .btn.add-list {
      background-color: #4361ee;
      color: #fff;
      font-weight: 600;
      border: 1px solid #e0e6ed;
      padding: 10px 25px;
    }

    #addTaskModal .compose-box h5 {
      font-weight: 700;
      font-size: 18px;
      color: #515365;
      text-align: center;
      margin-bottom: 38px;
    }

    #addTaskModal .task-title {
      display: flex;
    }

    #addTaskModal .modal-content .card {
      border: 1px solid #e0e6ed;
      border-radius: 6px;
      cursor: pointer;
      background-color: #fff;
    }

    #addTaskModal .modal-content .card-header {
      padding: 0;
      padding: 0;
      border: 0;
      background: 0;
    }

    #addTaskModal .modal-content .card-header>div {
      padding: 13px 21px;
      font-weight: 600;
      font-size: 16px;
      color: #4361ee;
    }

    #addTaskModal .modal-content {
      border: 0;
      box-shadow: 0 0 15px 1px rgba(113, 106, 202, 0.2);
    }

    #addTaskModal .modal-content svg {
      align-self: center;
      font-size: 19px;
      margin-right: 14px;
      color: #4361ee;
      font-weight: 600;
    }

    #addTaskModal .modal-content input {
      padding: 10px 16px;
    }

    #addTaskModal .task-badge {
      display: flex;
    }

    #addTaskModal .modal-content textarea {
      padding: 10px 16px;
    }

    #addTaskModal .modal-footer {
      justify-content: center;
      border: 0;
      padding-top: 0;
    }

    #addTaskModal .modal-footer .btn[data-dismiss="modal"] {
      background-color: #fff;
      color: #4361ee;
      font-weight: 700;
      border: 1px solid #e8e8e8;
      padding: 10px 25px;
    }

    #addTaskModal .modal-footer [data-btnfn="addTask"] {
      background-color: #4361ee;
      color: #fff;
      font-weight: 600;
      border: 1px solid #4361ee;
      padding: 10px 25px;
    }

    #addTaskModal .modal-footer [data-btnfn="editTask"] {
      background-color: #009688;
      color: #fff;
      font-weight: 600;
      border: 1px solid #e0e6ed;
      padding: 10px 25px;
    }

    #deleteConformation .modal-content {
      border: 0;
      -webkit-box-shadow: 2px 5px 17px 0 rgba(31, 45, 61, 0.1);
      box-shadow: 2px 5px 17px 0 rgba(31, 45, 61, 0.1);
      padding: 30px;
    }

    #deleteConformation .modal-content .modal-header {
      border: 0;
      padding: 0;
    }

    #deleteConformation .modal-content .modal-header .icon {
      padding: 7px 9px;
      background: rgba(231, 81, 90, 0.37);
      text-align: center;
      margin-right: 8px;
      border-radius: 50%;
    }

    #deleteConformation .modal-content .modal-header svg {
      width: 20px;
      color: #e7515a;
      fill: rgba(231, 81, 90, 0.37);
    }

    #deleteConformation .modal-content .modal-header .modal-title {
      color: #3b3f5c;
      font-size: 18px;
      font-weight: 700;
      align-self: center;
    }

    #deleteConformation .modal-content .modal-body {
      padding: 28px 0;
    }

    #deleteConformation .modal-content .modal-body p {
      color: #888ea8;
      font-size: 15px;
      font-weight: 600;
      margin-bottom: 0;
    }

    #deleteConformation .modal-content .modal-footer {
      padding: 0;
      border: 0;
    }

    #deleteConformation .modal-content .modal-footer [data-dismiss="modal"] {
      background-color: #fff;
      color: #e7515a;
      font-weight: 700;
      border: 1px solid #e8e8e8;
      padding: 10px 25px;
    }

    #deleteConformation .modal-content .modal-footer [data-remove="task"] {
      color: #fff;
      font-weight: 600;
      padding: 10px 25px;
    }

    .task-list-section {
      display: flex;
      overflow-x: auto;
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
      padding-bottom: 15px;
    }

    .task-list-container {
      min-width: 309px;
      padding: 0 15px;
      width: 320px;
    }

    .task-list-container:first-child {
      padding-left: 0;
    }

    .task-list-container:last-child {
      padding-right: 0;
    }

    .connect-sorting {
      padding: 15px;
      border-radius: 10px;
      border: 1px solid #e0e6ed;
      background: #e2e6ea;
    }

    .connect-sorting .task-container-header {
      display: flex;
      justify-content: space-between;
      padding: 18px 5px;
    }

    .connect-sorting .task-container-header .dropdown .dropdown-menu {
      padding: 11px;
    }

    .connect-sorting .task-container-header .dropdown .dropdown-menu .dropdown-item {
      padding: 5px;
      font-size: 14px;
      font-weight: 700;
    }

    .connect-sorting .task-container-header .dropdown .dropdown-menu .dropdown-item:hover {
      color: #4361ee;
    }

    .connect-sorting .task-container-header .dropdown .dropdown-menu .dropdown-item.active,
    .connect-sorting .task-container-header .dropdown .dropdown-menu .dropdown-item:active {
      background-color: transparent;
    }

    .connect-sorting .task-container-header h6 {
      font-size: 16px;
      font-weight: 700;
    }

    .connect-sorting .add-s-task {
      -webkit-transition: all 0.3s ease-out;
      text-align: center;
      transition: all 0.3s ease-out;
    }

    .connect-sorting .add-s-task:hover {
      -webkit-transform: translateY(-3px);
      transform: translateY(-3px);
    }

    .connect-sorting .add-s-task .add-task {
      display: block;
      color: #3b3f5c;
      font-size: 13px;
      font-weight: 700;
      text-align: center;
      display: inline-block;
      cursor: pointer;
    }

    .connect-sorting .add-s-task .add-task:hover {
      color: #4361ee;
    }

    .connect-sorting .add-s-task .add-task svg {
      width: 16px;
      height: 16px;
      vertical-align: text-top;
    }

    .scrumboard .task-header {
      margin-bottom: 0;
      display: flex;
      justify-content: space-between;
      padding: 20px 20px 0 20px;
    }

    .scrumboard .task-header h4 {
      font-size: 16px;
      font-weight: 700;
      margin-bottom: 0;
    }

    .scrumboard .task-header svg.feather-edit-2 {
      width: 18px;
      height: 18px;
      color: #888ea8;
      vertical-align: middle;
      fill: rgba(0, 23, 55, 0.08);
      cursor: pointer;
      padding: 0;
      margin-right: 5px;
    }

    .scrumboard .task-header svg.feather-edit-2:hover {
      color: #4361ee;
      fill: rgba(27, 85, 226, 0.23921568627450981);
    }

    .scrumboard .task-header svg.feather-trash-2 {
      color: #e7515a;
      margin-right: 6px;
      vertical-align: middle;
      width: 18px;
      height: 18px;
      fill: rgba(231, 81, 90, 0.14);
      cursor: pointer;
    }

    .scrumboard .task-header svg.feather-trash-2:hover {
      fill: rgba(231, 81, 90, 0.37);
    }

    .scrumboard .card {
      border: 0;
      border-radius: 4px;
      margin-bottom: 30px;
      box-shadow: rgb(145 158 171 / 24%) 0 0 2px 0,
        rgb(145 158 171 / 24%) 0 16px 32px -4px;
    }

    .scrumboard .card .card-body {
      padding: 0;
    }

    .scrumboard .card .card-body .task-body .task-bottom {
      display: flex;
      justify-content: space-between;
      padding: 12px 15px;
    }

    .scrumboard .card .card-body .task-body .task-bottom div.tb-section-1 span {
      font-size: 13px;
      font-weight: 600;
      width: 17px;
      height: 17px;
    }

    .scrumboard .card .card-body .task-body .task-bottom div.tb-section-1 span:hover {
      color: #4361ee;
      cursor: pointer;
    }

    .scrumboard .card .card-body .task-body .task-bottom div.tb-section-1 span:hover svg {
      color: #4361ee;
      fill: rgba(27, 85, 226, 0.23921568627450981);
    }

    .scrumboard .card .card-body .task-body .task-bottom div.tb-section-1 svg {
      width: 18px;
      vertical-align: bottom;
    }

    .scrumboard .card .card-body .task-body .task-bottom div.tb-section-1 svg:not(:last-child) {
      margin-right: 5px;
    }

    .scrumboard .card .card-body .task-body .task-bottom div.tb-section-2 svg {
      width: 18px;
      cursor: pointer;
    }

    .scrumboard .card .card-body .task-body .task-bottom div.tb-section-2 svg {
      color: #888ea8;
      margin-right: 6px;
      vertical-align: middle;
      width: 18px;
      height: 18px;
      fill: rgba(0, 23, 55, 0.08);
    }

    .scrumboard .card .card-body .task-body .task-bottom div.tb-section-2 svg.feather-edit-2 {
      width: 18px;
      height: 18px;
      color: #888ea8;
      vertical-align: middle;
      fill: rgba(0, 23, 55, 0.08);
      cursor: pointer;
      padding: 0;
    }

    .scrumboard .card .card-body .task-body .task-bottom div.tb-section-2 svg.feather-edit-2:hover {
      color: #4361ee;
      fill: rgba(27, 85, 226, 0.23921568627450981);
    }

    .scrumboard .card .card-body .task-body .task-bottom div.tb-section-2 svg.feather-trash-2 {
      color: #e7515a;
      margin-right: 6px;
      vertical-align: middle;
      width: 18px;
      height: 18px;
      fill: rgba(231, 81, 90, 0.14);
    }

    .scrumboard .card .card-body .task-body .task-bottom div.tb-section-2 svg.feather-trash-2:hover {
      fill: rgba(231, 81, 90, 0.37);
    }

    .scrumboard .card .card-body .task-body .task-bottom div.tb-section-2 svg:not(:last-child) {
      margin-right: 5px;
    }

    .scrumboard .card.img-task .card-body .task-content {
      padding: 10px 10px 0 10px;
    }

    .scrumboard .card.img-task .card-body .task-content img {
      border-radius: 6px;
      height: 105px;
      width: 100%;
    }

    .scrumboard .card.simple-title-task .card-body .task-header {
      margin-bottom: 0;
      padding: 20px;
    }

    .scrumboard .card.simple-title-task .card-body .task-header div:nth-child(1) {
      width: 70%;
    }

    .scrumboard .card.simple-title-task .card-body .task-header div:nth-child(2) {
      width: 30%;
      text-align: right;
    }

    .scrumboard .card.simple-title-task .card-body .task-body .task-bottom {
      padding: 3px 15px 11px 15px;
    }

    .scrumboard .card.task-text-progress .card-body .task-content {
      margin-top: 20px;
    }

    .scrumboard .card.task-text-progress .card-body .task-content p {
      padding: 5px 20px 5px 20px;
    }

    .scrumboard .card.task-text-progress .card-body .task-content>div {
      display: flex;
      padding: 5px 20px 5px 20px;
    }

    .scrumboard .card.task-text-progress .card-body .task-content .progress {
      height: 9px;
      width: 100%;
      margin-right: 17px;
      margin-bottom: 0;
      align-self: center;
    }

    .scrumboard .card.task-text-progress .card-body .task-content>div p.progress-count {
      padding: 0;
      margin-bottom: 0;
    }

    .scrumboard .card.ui-sortable-helper {
      background-color: #4361ee;
    }

    .scrumboard .card.ui-sortable-helper .task-header span {
      color: #fff;
    }

    .scrumboard .card.ui-sortable-helper .task-header span svg {
      color: #fff;
    }

    .scrumboard .card.ui-sortable-helper .task-header svg.feather-edit-2 {
      color: #fff;
    }

    .scrumboard .card.ui-sortable-helper .task-header svg.feather-trash-2 {
      color: #fff;
    }

    .scrumboard .card.ui-sortable-helper .task-header h4 {
      color: #fff;
    }

    .scrumboard .card.ui-sortable-helper.task-text-progress .card-body .task-content p {
      color: #fff;
    }

    .scrumboard .card.ui-sortable-helper.task-text-progress .card-body .task-content .progress .progress-bar {
      background-color: #2196f3 !important;
    }

    .scrumboard .card.ui-sortable-helper .task-header svg.feather-user {
      color: #fff;
    }

    .scrumboard .card.ui-sortable-helper .card-body .task-body .task-bottom div.tb-section-1 {
      color: #fff;
    }

    .scrumboard .card.ui-sortable-helper .card-body .task-body .task-bottom div.tb-section-1 svg {
      color: #fff;
    }

    .scrumboard .card.ui-sortable-helper .card-body .task-body .task-bottom div.tb-section-2 svg {
      color: #fff;
    }

    .scrumboard .card.ui-sortable-helper .card-body .task-content .progress {
      box-shadow: none;
    }

    .ui-state-highlight {
      position: relative;
      border-color: #4361ee;
      height: 141px;
      margin-bottom: 36px;
      border-radius: 15px;
      border: 1px dashed #4361ee;
      background-image: linear-gradient(45deg,
          rgba(27, 85, 226, 0.09) 25%,
          transparent 25%,
          transparent 50%,
          rgba(27, 85, 226, 0.09) 50%,
          rgba(27, 85, 226, 0.09) 75%,
          transparent 75%,
          transparent);
      background-size: 1rem 1rem;
      -webkit-animation: progress-bar-stripes 1s linear infinite;
      animation: progress-bar-stripes 1s linear infinite;
    }

    .ui-state-highlight:before {
      content: "Drop";
      position: absolute;
      left: 41%;
      font-size: 19px;
      color: #4361ee;
      top: 50%;
      margin-top: -16px;
      font-weight: 600;
    }

    .connect-sorting-content {
      min-height: 60px;
    }

    @keyframes progress-bar-stripes {
      0% {
        transform: translate(0, 0);
      }

      100% {
        transform: translate(1rem, 0);
      }
    }
  </style>