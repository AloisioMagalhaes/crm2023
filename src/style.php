<style>
  /*
	===============================
			@Import	Function
	===============================
*/
/*
	===============================
			@Import	Mixins
	===============================
*/
html {
  min-height: 100%; }

body {
  color: #888ea8;
  height: 100%;
  font-size: 0.875rem;
  background: #f1f2f3;
  overflow-x: hidden;
  overflow-y: auto;
  letter-spacing: 0.0312rem;
  font-family: 'Quicksand', sans-serif; }

h1, h2, h3, h4, h5, h6 {
  color: #3b3f5c; }

:focus {
  outline: none; }

::-moz-selection {
  /* Code for Firefox */
  color: #4361ee;
  background: transparent; }

::selection {
  color: #4361ee;
  background: transparent; }

p {
  margin-top: 0;
  margin-bottom: 0.625rem;
  color: #515365; }

hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border-top: 1px solid #f1f2f3; }

strong {
  font-weight: 600; }

code {
  color: #e7515a; }

select.form-custom::-ms-expand {
  display: none; }

.custom-file-input:focus ~ .custom-file-label {
  border: 1px solid #ced4da;
  box-shadow: none; }
  .custom-file-input:focus ~ .custom-file-label::after {
    border: none;
    border-left: 1px solid #ced4da; }

.lead a.btn.btn-primary.btn-lg {
  margin-top: 15px;
  border-radius: 4px; }

.jumbotron {
  background-color: #f1f2f3; }

.mark, mark {
  background-color: #fff9ed; }

.code-section-container {
  margin-top: 20px;
  text-align: left; }

.toggle-code-snippet {
  border: none;
  background-color: transparent !important;
  padding: 0px !important;
  box-shadow: none !important;
  color: #888ea8 !important;
  margin-bottom: -24px;
  border-bottom: 1px dashed #bfc9d4;
  border-radius: 0; }
  .toggle-code-snippet svg {
    color: #4361ee; }

.code-section {
  padding: 0;
  height: 0; }

.code-section-container.show-code .code-section {
  margin-top: 20px;
  height: auto; }

.code-section pre {
  margin-bottom: 0;
  height: 0;
  padding: 0;
  border-radius: 6px; }

.code-section-container.show-code .code-section pre {
  height: auto;
  padding: 22px; }

.code-section code {
  color: #fff; }

/*blockquote*/
blockquote.blockquote {
  color: #0e1726;
  padding: 20px 20px 20px 14px;
  font-size: 0.875rem;
  background-color: #ffffff;
  border-bottom-right-radius: 8px;
  border-top-right-radius: 8px;
  border: 1px solid #e0e6ed;
  border-left: 2px solid #4361ee;
  -webkit-box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07);
  -moz-box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07);
  box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07); }
  blockquote.blockquote > p {
    margin-bottom: 0; }

blockquote .small:before, blockquote footer:before, blockquote small:before {
  content: '\2014 \00A0'; }

blockquote .small, blockquote footer, blockquote small {
  display: block;
  font-size: 80%;
  line-height: 1.42857143;
  color: #777; }

blockquote.media-object.m-o-border-right {
  border-right: 4px solid #4361ee;
  border-left: none; }

blockquote.media-object .media .usr-img img {
  width: 55px; }

/* Icon List */
.list-icon {
  list-style: none;
  padding: 0;
  margin-bottom: 0; }
  .list-icon li:not(:last-child) {
    margin-bottom: 15px; }
  .list-icon svg {
    width: 18px;
    height: 18px;
    color: #4361ee;
    margin-right: 2px;
    vertical-align: sub; }
  .list-icon .list-text {
    font-size: 14px;
    font-weight: 600;
    color: #515365;
    letter-spacing: 1px; }

a {
  color: #515365;
  outline: none; }
  a:hover {
    color: #555555;
    text-decoration: none; }
  a:focus {
    outline: none;
    text-decoration: none; }

button:focus {
  outline: none; }

textarea {
  outline: none; }
  textarea:focus {
    outline: none; }

.btn-link:hover {
  text-decoration: none; }

span.blue {
  color: #4361ee; }

span.green {
  color: #1abc9c; }

span.red {
  color: #e7515a; }

/*      Form Group Label       */
.form-group label, label {
  font-size: 15px;
  color: #888ea8;
  letter-spacing: 1px; }

/*  Disable forms     */
.custom-control-input:disabled ~ .custom-control-label {
  color: #d3d3d3; }

/*      Form Control       */
.form-control {
  height: auto;
  border: 1px solid #bfc9d4;
  color: #3b3f5c;
  font-size: 15px;
  padding: 8px 10px;
  letter-spacing: 1px;
  height: calc(1.4em + 1.4rem + 2px);
  padding: .75rem 1.25rem;
  border-radius: 6px; }
  .form-control[type="range"] {
    padding: 0; }
  .form-control:focus {
    box-shadow: 0 0 5px 2px rgba(194, 213, 255, 0.619608);
    border-color: #4361ee;
    color: #3b3f5c; }
  .form-control::-webkit-input-placeholder, .form-control::-ms-input-placeholder, .form-control::-moz-placeholder {
    color: #bfc9d4;
    font-size: 15px; }
  .form-control:focus::-webkit-input-placeholder, .form-control:focus::-ms-input-placeholder, .form-control:focus::-moz-placeholder {
    color: #d3d3d3;
    font-size: 15px; }
  .form-control.form-control-lg {
    font-size: 19px;
    padding: 11px 20px; }
  .form-control.form-control-sm {
    padding: 7px 16px;
    font-size: 13px; }

/*      Custom Select       */
.custom-select {
  height: auto;
  border: 1px solid #f1f2f3;
  color: #3b3f5c;
  font-size: 15px;
  padding: 8px 10px;
  letter-spacing: 1px;
  background-color: #f1f2f3; }
  .custom-select.custom-select-lg {
    font-size: 18px;
    padding: 16px 20px; }
  .custom-select.custom-select-sm {
    font-size: 13px;
    padding: 7px 16px; }
  .custom-select:focus {
    box-shadow: none;
    border-color: #4361ee;
    color: #3b3f5c; }

/*      Form Control File       */
.form-control-file {
  width: 100%;
  color: #805dca; }
  .form-control-file::-webkit-file-upload-button {
    letter-spacing: 1px;
    padding: 9px 20px;
    text-shadow: none;
    font-size: 12px;
    color: #fff;
    font-weight: normal;
    white-space: normal;
    word-wrap: break-word;
    transition: .2s ease-out;
    touch-action: manipulation;
    cursor: pointer;
    background-color: #805dca;
    box-shadow: 0px 0px 15px 1px rgba(113, 106, 202, 0.2);
    will-change: opacity, transform;
    transition: all 0.3s ease-out;
    -webkit-transition: all 0.3s ease-out;
    border-radius: 4px;
    border: transparent;
    outline: none; }
  .form-control-file::-ms-file-upload-button {
    letter-spacing: 1px;
    padding: 9px 20px;
    text-shadow: none;
    font-size: 14px;
    color: #fff;
    font-weight: normal;
    white-space: normal;
    word-wrap: break-word;
    transition: .2s ease-out;
    touch-action: manipulation;
    cursor: pointer;
    background-color: #805dca;
    box-shadow: 0px 0px 15px 1px rgba(113, 106, 202, 0.2);
    will-change: opacity, transform;
    transition: all 0.3s ease-out;
    -webkit-transition: all 0.3s ease-out;
    border-radius: 4px;
    border: transparent;
    outline: none; }
  .form-control-file.form-control-file-rounded::-webkit-file-upload-button {
    -webkit-border-radius: 1.875rem !important;
    -moz-border-radius: 1.875rem !important;
    -ms-border-radius: 1.875rem !important;
    -o-border-radius: 1.875rem !important;
    border-radius: 1.875rem !important; }

select.form-control.form-custom {
  display: inline-block;
  width: 100%;
  height: calc(2.25rem + 2px);
  vertical-align: middle;
  background: #fff url(../img/arrow-down.png) no-repeat right 0.75rem center;
  background-size: 13px 14px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none; }

/*      Form Control Custom File       */
.custom-file {
  height: auto; }
  .custom-file input {
    height: auto; }

.custom-file-label {
  height: auto;
  border: 1px solid #f1f2f3;
  color: #3b3f5c;
  font-size: 15px;
  padding: 8px 10px;
  letter-spacing: 1px;
  background-color: #f1f2f3; }
  .custom-file-label::after {
    height: auto;
    padding: 8px 12px;
    color: #515365; }

/*      Input Group      */
.input-group button:hover, .input-group .btn:hover, .input-group button:focus, .input-group .btn:focus {
  transform: none; }

.input-group .dropdown-menu {
  border: none;
  border: 1px solid #e0e6ed;
  z-index: 1028;
  box-shadow: none;
  padding: 10px;
  padding: .35rem 0;
  top: 0 !important;
  right: auto;
  border-radius: 8px; }
  .input-group .dropdown-menu a.dropdown-item {
    border-radius: 5px;
    width: 100%;
    padding: 6px 17px;
    clear: both;
    font-weight: 500;
    color: #030305;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
    font-size: 13px; }
    .input-group .dropdown-menu a.dropdown-item:hover {
      color: #2196f3; }
  .input-group .dropdown-menu .dropdown-item:hover {
    color: #2196f3; }

.input-group .dropdown-divider {
  height: 0;
  margin: .5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9ecef; }

.input-group .input-group-prepend .input-group-text {
  border: 1px solid #bfc9d4;
  background-color: #f1f2f3; }
  .input-group .input-group-prepend .input-group-text svg {
    color: #888ea8; }

.input-group:hover .input-group-prepend .input-group-text svg {
  color: #4361ee;
  fill: rgba(27, 85, 226, 0.239216); }

.input-group .input-group-append .input-group-text {
  border: 1px solid #bfc9d4;
  background-color: #f1f2f3; }
  .input-group .input-group-append .input-group-text svg {
    color: #888ea8; }

.input-group:hover .input-group-append .input-group-text svg {
  color: #4361ee;
  fill: rgba(27, 85, 226, 0.239216); }

/*      Input Group append       */
/*      Input Group Append       */
/*      Validation Customization      */
.invalid-feedback {
  color: #e7515a;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 1px; }

.valid-feedback {
  color: #1abc9c;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 1px; }

.valid-tooltip {
  background-color: #1abc9c; }

.invalid-tooltip {
  background-color: #e7515a; }

.custom-select.is-valid, .form-control.is-valid {
  border-color: #1abc9c;
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%231abc9c' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-check'%3e%3cpolyline points='20 6 9 17 4 12'%3e%3c/polyline%3e%3c/svg%3e"); }

.was-validated .custom-select:valid, .was-validated .form-control:valid {
  border-color: #1abc9c;
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%231abc9c' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-check'%3e%3cpolyline points='20 6 9 17 4 12'%3e%3c/polyline%3e%3c/svg%3e"); }

.custom-control-input.is-valid ~ .custom-control-label, .was-validated .custom-control-input:valid ~ .custom-control-label {
  color: #1abc9c; }

.form-control.is-invalid, .was-validated .form-control:invalid {
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23e7515a' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-x'%3e%3cline x1='18' y1='6' x2='6' y2='18'%3e%3c/line%3e%3cline x1='6' y1='6' x2='18' y2='18'%3e%3c/line%3e%3c/svg%3e"); }

.custom-control-input.is-invalid ~ .custom-control-label, .was-validated .custom-control-input:invalid ~ .custom-control-label {
  color: #e7515a; }

.dropdown-toggle:after, .dropup .dropdown-toggle::after, .dropright .dropdown-toggle::after, .dropleft .dropdown-toggle::before {
  display: none; }

.dropdown-toggle svg.feather[class*="feather-chevron-"] {
  width: 15px;
  height: 15px;
  vertical-align: middle; }

.btn {
  padding: 0.4375rem 1.25rem;
  text-shadow: none;
  font-size: 14px;
  color: #3b3f5c;
  font-weight: normal;
  white-space: normal;
  word-wrap: break-word;
  transition: .2s ease-out;
  touch-action: manipulation;
  cursor: pointer;
  background-color: #f1f2f3;
  box-shadow: 0px 5px 20px 0 rgba(0, 0, 0, 0.1);
  will-change: opacity, transform;
  transition: all 0.3s ease-out;
  -webkit-transition: all 0.3s ease-out; }
  .btn svg {
    width: 20px;
    height: 20px;
    vertical-align: bottom; }
  .btn.rounded-circle {
    height: 40px;
    width: 40px;
    padding: 8px 8px; }
  .btn:hover, .btn:focus {
    color: #3b3f5c;
    background-color: #f1f2f3;
    border-color: #d3d3d3;
    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 5px 0 #e0e6ed,0 2px 10px 0 #e0e6ed;
    -webkit-transform: translateY(-3px);
    transform: translateY(-3px); }

.btn-group .btn:hover, .btn-group .btn:focus {
  -webkit-transform: none;
  transform: none; }

.btn.disabled, .btn.btn[disabled] {
  background-color: #f1f2f3;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  border: 1px solid rgba(0, 0, 0, 0.13); }

.btn.disabled:hover, .btn.btn[disabled]:hover {
  cursor: not-allowed; }

.btn .caret {
  border-top-color: #0e1726;
  margin-top: 0;
  margin-left: 3px;
  vertical-align: middle; }

.btn + .caret, .btn + .dropdown-toggle .caret {
  margin-left: 0; }

.btn-group > .btn, .btn-group .btn {
  padding: 8px 14px; }

.btn-group-lg > .btn, .btn-group-lg .btn {
  font-size: 1.125rem; }

.btn-group-lg > .btn {
  padding: .625rem 1.5rem;
  font-size: 16px; }

.btn-lg {
  padding: .625rem 1.5rem;
  font-size: 16px; }

.btn-group > .btn.btn-lg, .btn-group .btn.btn-lg {
  padding: .625rem 1.5rem;
  font-size: 16px; }

.btn-group-lg > .btn, .btn-group-lg .btn {
  font-size: 1.125rem; }

.btn-group-sm > .btn, .btn-sm {
  font-size: 0.6875rem; }

.btn-group > .btn.btn-sm, .btn-group .btn.btn-sm {
  font-size: 0.6875rem; }

.btn-group .dropdown-menu {
  border: none;
  border: 1px solid #e0e6ed;
  z-index: 1028;
  box-shadow: none;
  padding: 10px;
  padding: .35rem 0;
  top: 0 !important;
  right: auto;
  border-radius: 8px; }
  .btn-group .dropdown-menu a.dropdown-item {
    border-radius: 5px;
    width: 100%;
    padding: 6px 17px;
    clear: both;
    font-weight: 500;
    color: #030305;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
    font-size: 13px; }
    .btn-group .dropdown-menu a.dropdown-item:hover {
      color: #2196f3; }
    .btn-group .dropdown-menu a.dropdown-item svg {
      cursor: pointer;
      color: #888ea8;
      margin-right: 6px;
      vertical-align: middle;
      width: 20px;
      height: 20px;
      fill: rgba(0, 23, 55, 0.08); }
    .btn-group .dropdown-menu a.dropdown-item:hover svg {
      color: #4361ee; }

.dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu {
  border: none;
  border: 1px solid #e0e6ed;
  z-index: 899;
  box-shadow: none;
  padding: 10px;
  padding: .35rem 0;
  transition: top 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;
  opacity: 0;
  visibility: hidden;
  display: block !important;
  transform: none !important;
  top: 0 !important;
  right: 0;
  left: auto !important;
  border-radius: 8px; }
  .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu.right {
    right: auto;
    left: auto !important; }
  .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu.left {
    right: 0;
    left: auto !important; }
  .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu.show {
    opacity: 1;
    visibility: visible;
    top: 21px !important; }
  .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu a.dropdown-item {
    border-radius: 5px;
    display: block;
    width: 100%;
    padding: 6px 17px;
    clear: both;
    font-weight: 500;
    color: #030305;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
    font-size: 13px; }
    .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu a.dropdown-item svg {
      width: 18px;
      height: 18px;
      margin-right: 4px;
      vertical-align: bottom;
      color: #888ea8; }
    .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu a.dropdown-item:hover svg {
      color: #2196f3; }
    .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu a.dropdown-item.active, .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu a.dropdown-item:active {
      background-color: transparent;
      color: #3b3f5c;
      font-weight: 700; }
    .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu a.dropdown-item:hover {
      color: #2196f3; }

.btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-primary.dropdown-toggle:focus {
  box-shadow: none; }

.btn-secondary:not(:disabled):not(.disabled).active:focus, .btn-secondary:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: none; }

.btn-success:not(:disabled):not(.disabled).active:focus, .btn-success:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-success.dropdown-toggle:focus {
  box-shadow: none; }

.btn-info:not(:disabled):not(.disabled).active:focus, .btn-info:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-info.dropdown-toggle:focus {
  box-shadow: none; }

.btn-danger:not(:disabled):not(.disabled).active:focus, .btn-danger:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-danger.dropdown-toggle:focus {
  box-shadow: none; }

.btn-warning:not(:disabled):not(.disabled).active:focus, .btn-warning:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-warning.dropdown-toggle:focus {
  box-shadow: none; }

.btn-secondary:not(:disabled):not(.disabled).active:focus, .btn-secondary:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: none; }

.btn-dark:not(:disabled):not(.disabled).active:focus, .btn-dark:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-dark.dropdown-toggle:focus {
  box-shadow: none; }

.btn-outline-primary:not(:disabled):not(.disabled).active:focus, .btn-outline-primary:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-outline-primary.dropdown-toggle:focus {
  box-shadow: none; }

.btn-outline-success:not(:disabled):not(.disabled).active:focus, .btn-outline-success:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-outline-success.dropdown-toggle:focus {
  box-shadow: none; }

.btn-outline-info:not(:disabled):not(.disabled).active:focus, .btn-outline-info:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-outline-info.dropdown-toggle:focus {
  box-shadow: none; }

.btn-outline-danger:not(:disabled):not(.disabled).active:focus, .btn-outline-danger:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-outline-danger.dropdown-toggle:focus {
  box-shadow: none; }

.btn-outline-warning:not(:disabled):not(.disabled).active:focus, .btn-outline-warning:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-outline-warning.dropdown-toggle:focus {
  box-shadow: none; }

.btn-outline-secondary:not(:disabled):not(.disabled).active:focus, .btn-outline-secondary:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-outline-secondary.dropdown-toggle:focus {
  box-shadow: none; }

.btn-outline-dark:not(:disabled):not(.disabled).active:focus, .btn-outline-dark:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-outline-dark.dropdown-toggle:focus {
  box-shadow: none; }

.btn.focus, .btn:focus {
  box-shadow: none; }

.btn-success:focus, .btn-info:focus, .btn-danger:focus, .btn-warning:focus, .btn-secondary:focus, .btn-dark:focus, .btn-outline-success:focus, .btn-outline-info:focus, .btn-outline-danger:focus, .btn-outline-warning:focus, .btn-outline-secondary:focus, .btn-outline-dark:focus .btn-light-default:focus, .btn-light-primary:focus, .btn-light-success:focus, .btn-light-info:focus, .btn-light-danger:focus, .btn-light-warning:focus, .btn-light-secondary:focus, .btn-light-dark:focus {
  box-shadow: none; }

/*      Default Buttons       */
.btn-primary {
  color: #fff !important;
  background-color: #4361ee !important;
  border-color: #4361ee;
  box-shadow: 0 10px 20px -10px #4361ee; }
  .btn-primary:hover, .btn-primary:focus {
    color: #fff !important;
    background-color: #4361ee;
    box-shadow: none;
    border-color: #4361ee; }
  .btn-primary:active, .btn-primary.active {
    background-color: #4361ee;
    border-top: 1px solid #4361ee; }
  .btn-primary.disabled, .btn-primary.btn[disabled], .btn-primary:disabled {
    background-color: #4361ee;
    border-color: #4361ee;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none; }
  .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover {
    color: #fff !important;
    background-color: #2aebcb;
    border-color: #2aebcb; }
  .btn-primary.focus:active {
    color: #fff !important;
    background-color: #2aebcb;
    border-color: #2aebcb; }
  .btn-primary:active:focus, .btn-primary:active:hover {
    color: #fff !important;
    background-color: #2aebcb;
    border-color: #2aebcb; }

.open > .dropdown-toggle.btn-primary.focus, .open > .dropdown-toggle.btn-primary:focus, .open > .dropdown-toggle.btn-primary:hover {
  color: #fff !important;
  background-color: #2aebcb;
  border-color: #2aebcb; }

.btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active {
  color: #fff !important;
  background-color: #4361ee;
  border-color: #4361ee; }

.show > .btn-primary.dropdown-toggle {
  color: #fff !important;
  background-color: #4361ee;
  border-color: #4361ee; }

.btn-primary .caret {
  border-top-color: #fff; }

.btn-group.open .btn-primary.dropdown-toggle {
  background-color: #eaf1ff; }

.btn-secondary {
  color: #fff !important;
  background-color: #805dca;
  border-color: #805dca;
  box-shadow: 0 10px 20px -10px #805dca; }
  .btn-secondary:hover, .btn-secondary:focus {
    color: #fff !important;
    background-color: #805dca;
    box-shadow: none;
    border-color: #805dca; }
  .btn-secondary:active, .btn-secondary.active {
    background-color: #805dca;
    border-top: 1px solid #805dca; }
  .btn-secondary:not(:disabled):not(.disabled).active, .btn-secondary:not(:disabled):not(.disabled):active {
    color: #fff !important;
    background-color: #805dca;
    border-color: #805dca; }

.show > .btn-secondary.dropdown-toggle {
  color: #fff !important;
  background-color: #805dca;
  border-color: #805dca; }

.btn-secondary.disabled, .btn-secondary.btn[disabled], .btn-secondary:disabled {
  background-color: #805dca;
  border-color: #805dca;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none; }

.btn-secondary .caret {
  border-top-color: #fff; }

.btn-info {
  color: #fff !important;
  background-color: #2196f3;
  border-color: #2196f3;
  box-shadow: 0 10px 20px -10px #2196f3; }
  .btn-info:hover, .btn-info:focus {
    color: #fff !important;
    background-color: #2196f3;
    box-shadow: none;
    border-color: #2196f3; }
  .btn-info:active, .btn-info.active {
    background-color: #2196f3;
    border-top: 1px solid #2196f3; }
  .btn-info:not(:disabled):not(.disabled).active, .btn-info:not(:disabled):not(.disabled):active {
    color: #fff !important;
    background-color: #2196f3;
    border-color: #2196f3; }

.show > .btn-info.dropdown-toggle {
  color: #fff !important;
  background-color: #2196f3;
  border-color: #2196f3; }

.btn-info.disabled, .btn-info.btn[disabled], .btn-info:disabled {
  background-color: #2196f3;
  border-color: #2196f3;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none; }

.btn-info.active.focus, .btn-info.active:focus, .btn-info.active:hover {
  color: #fff !important;
  background-color: #2196f3;
  border-color: #2196f3; }

.btn-info.focus:active {
  color: #fff !important;
  background-color: #2196f3;
  border-color: #2196f3; }

.btn-info:active:focus, .btn-info:active:hover {
  color: #fff !important;
  background-color: #2196f3;
  border-color: #2196f3; }

.open > .dropdown-toggle.btn-info.focus, .open > .dropdown-toggle.btn-info:focus, .open > .dropdown-toggle.btn-info:hover {
  color: #fff !important;
  background-color: #2196f3;
  border-color: #2196f3; }

.btn-info .caret {
  border-top-color: #fff; }

.btn-group.open .btn-info.dropdown-toggle {
  background-color: #e7f7ff; }

.btn-warning {
  color: #fff !important;
  background-color: #e2a03f;
  border-color: #e2a03f;
  box-shadow: 0 10px 20px -10px #e2a03f; }
  .btn-warning:hover, .btn-warning:focus {
    color: #fff !important;
    background-color: #e2a03f;
    box-shadow: none;
    border-color: #e2a03f; }
  .btn-warning:active, .btn-warning.active {
    background-color: #e2a03f;
    border-top: 1px solid #e2a03f; }
  .btn-warning:not(:disabled):not(.disabled).active, .btn-warning:not(:disabled):not(.disabled):active {
    color: #0e1726;
    background-color: #e2a03f;
    border-color: #e2a03f; }

.show > .btn-warning.dropdown-toggle {
  color: #0e1726;
  background-color: #e2a03f;
  border-color: #e2a03f; }

.btn-warning.disabled, .btn-warning.btn[disabled], .btn-warning:disabled {
  background-color: #e2a03f;
  border-color: #e2a03f;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none; }

.btn-warning.active.focus, .btn-warning.active:focus, .btn-warning.active:hover {
  color: #fff !important;
  background-color: #e2a03f;
  border-color: #e2a03f; }

.btn-warning.focus:active {
  color: #fff !important;
  background-color: #e2a03f;
  border-color: #e2a03f; }

.btn-warning:active:focus, .btn-warning:active:hover {
  color: #fff !important;
  background-color: #e2a03f;
  border-color: #e2a03f; }

.open > .dropdown-toggle.btn-warning.focus, .open > .dropdown-toggle.btn-warning:focus, .open > .dropdown-toggle.btn-warning:hover {
  color: #fff !important;
  background-color: #e2a03f;
  border-color: #e2a03f; }

.btn-warning .caret {
  border-top-color: #fff; }

.btn-group.open .btn-warning.dropdown-toggle {
  background-color: #df8505; }

.btn-danger {
  color: #fff !important;
  background-color: #e7515a;
  border-color: #e7515a;
  box-shadow: 0 10px 20px -10px #e7515a; }
  .btn-danger:hover, .btn-danger:focus {
    color: #fff !important;
    background-color: #e7515a;
    box-shadow: none;
    border-color: #e7515a; }
  .btn-danger:active, .btn-danger.active {
    background-color: #e7515a;
    border-top: 1px solid #e7515a; }
  .btn-danger:not(:disabled):not(.disabled).active, .btn-danger:not(:disabled):not(.disabled):active {
    color: #fff !important;
    background-color: #e7515a;
    border-color: #e7515a; }

.show > .btn-danger.dropdown-toggle {
  color: #fff !important;
  background-color: #e7515a;
  border-color: #e7515a; }

.btn-danger.disabled, .btn-danger.btn[disabled], .btn-danger:disabled {
  background-color: #e7515a;
  border-color: #e7515a;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none; }

.btn-danger.active.focus, .btn-danger.active:focus, .btn-danger.active:hover {
  color: #fff !important;
  background-color: #c00;
  border-color: #c00; }

.btn-danger.focus:active {
  color: #fff !important;
  background-color: #c00;
  border-color: #c00; }

.btn-danger:active:focus, .btn-danger:active:hover {
  color: #fff !important;
  background-color: #c00;
  border-color: #c00; }

.open > .dropdown-toggle.btn-danger.focus, .open > .dropdown-toggle.btn-danger:focus, .open > .dropdown-toggle.btn-danger:hover {
  color: #fff !important;
  background-color: #c00;
  border-color: #c00; }

.btn-danger .caret {
  border-top-color: #fff; }

.btn-group.open .btn-danger.dropdown-toggle {
  background-color: #a9302a; }

.btn-dark {
  color: #fff !important;
  background-color: #3b3f5c;
  border-color: #3b3f5c;
  box-shadow: 0 10px 20px -10px #3b3f5c; }
  .btn-dark:hover, .btn-dark:focus {
    color: #fff !important;
    background-color: #3b3f5c;
    box-shadow: none;
    border-color: #3b3f5c; }
  .btn-dark:active, .btn-dark.active {
    background-color: #3b3f5c;
    border-top: 1px solid #3b3f5c; }
  .btn-dark:not(:disabled):not(.disabled).active, .btn-dark:not(:disabled):not(.disabled):active {
    color: #fff !important;
    background-color: #3b3f5c;
    border-color: #3b3f5c; }

.show > .btn-dark.dropdown-toggle {
  color: #fff !important;
  background-color: #3b3f5c;
  border-color: #3b3f5c; }

.btn-dark.disabled, .btn-dark.btn[disabled], .btn-dark:disabled {
  background-color: #3b3f5c;
  border-color: #3b3f5c;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none; }

.btn-dark .caret {
  border-top-color: #fff; }

.btn-group.open .btn-dark.dropdown-toggle {
  background-color: #484848; }

.btn-success {
  color: #fff !important;
  background-color: #1abc9c;
  border-color: #1abc9c;
  box-shadow: 0 10px 20px -10px #1abc9c; }
  .btn-success:hover, .btn-success:focus {
    color: #fff !important;
    background-color: #1abc9c;
    box-shadow: none;
    border-color: #1abc9c; }
  .btn-success:active, .btn-success.active {
    background-color: #1abc9c;
    border-top: 1px solid #1abc9c; }
  .btn-success:not(:disabled):not(.disabled).active, .btn-success:not(:disabled):not(.disabled):active {
    color: #fff !important;
    background-color: #1abc9c;
    border-color: #1abc9c; }

.show > .btn-success.dropdown-toggle {
  color: #fff !important;
  background-color: #1abc9c;
  border-color: #1abc9c; }

.btn-success.disabled, .btn-success.btn[disabled], .btn-success:disabled {
  background-color: #1abc9c;
  border-color: #1abc9c;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none; }

.btn-success.active.focus, .btn-success.active:focus, .btn-success.active:hover {
  color: #fff !important;
  background-color: #17c678;
  border-color: #17c678; }

.btn-success.focus:active {
  color: #fff !important;
  background-color: #17c678;
  border-color: #17c678; }

.btn-success:active:focus, .btn-success:active:hover {
  color: #fff !important;
  background-color: #17c678;
  border-color: #17c678; }

.open > .dropdown-toggle.btn-success.focus, .open > .dropdown-toggle.btn-success:focus, .open > .dropdown-toggle.btn-success:hover {
  color: #fff !important;
  background-color: #17c678;
  border-color: #17c678; }

.btn-success .caret {
  border-top-color: #fff; }

/*-----/Button Light Colors------*/
.btn.box-shadow-none {
  border: none; }
  .btn.box-shadow-none:hover, .btn.box-shadow-none:focus {
    border: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    background-color: transparent; }

.box-shadow-none {
  -webkit-box-shadow: none !important;
  -moz-box-shadow: none !important;
  box-shadow: none !important; }

.btn.box-shadow-none:not(:disabled):not(.disabled).active, .btn.box-shadow-none:not(:disabled):not(.disabled):active {
  border: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  background-color: transparent; }

.show > .btn.box-shadow-none.dropdown-toggle {
  border: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  background-color: transparent; }

.btn-group.open .btn-success.dropdown-toggle {
  background-color: #499249; }

.btn-dismiss {
  color: #0e1726;
  background-color: #fff !important;
  border-color: #fff;
  padding: 3px 7px; }
  .btn-dismiss:hover, .btn-dismiss:focus {
    color: #0e1726;
    background-color: #fff; }
  .btn-dismiss:active, .btn-dismiss.active {
    background-color: #fff;
    border-top: 1px solid #fff; }

.btn-group > .btn i {
  margin-right: 3px; }

.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  -webkit-box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.16), 0 0px 0px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.16), 0 0px 0px 0 rgba(0, 0, 0, 0.12);
  box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.16), 0 0px 0px 0 rgba(0, 0, 0, 0.12); }

.btn-group > .btn + .dropdown-toggle {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none; }
  .btn-group > .btn + .dropdown-toggle.btn-primary {
    border-left: 1px solid #4468fd; }
  .btn-group > .btn + .dropdown-toggle.btn-success {
    border-left: 1px solid #a3c66f; }
  .btn-group > .btn + .dropdown-toggle.btn-info {
    border-left: 1px solid #49acfb; }
  .btn-group > .btn + .dropdown-toggle.btn-warning {
    border-left: 1px solid #f5b455; }
  .btn-group > .btn + .dropdown-toggle.btn-danger {
    border-left: 1px solid #f1848b; }
  .btn-group > .btn + .dropdown-toggle.btn-dark {
    border-left: 1px solid #70767a; }
  .btn-group > .btn + .dropdown-toggle.btn-secondary {
    border-left: 1px solid #8353dc; }

.btn-group.dropleft .dropdown-toggle-split {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.btn-group.dropleft .btn-primary:not(.dropdown-toggle-split) {
  border-left: 1px solid #4468fd; }

.btn-group.dropleft .btn-success:not(.dropdown-toggle-split) {
  border-left: 1px solid #a3c66f; }

.btn-group.dropleft .btn-info:not(.dropdown-toggle-split) {
  border-left: 1px solid #49acfb; }

.btn-group.dropleft .btn-warning:not(.dropdown-toggle-split) {
  border-left: 1px solid #f5b455; }

.btn-group.dropleft .btn-danger:not(.dropdown-toggle-split) {
  border-left: 1px solid #f1848b; }

.btn-group.dropleft .btn-dark:not(.dropdown-toggle-split) {
  border-left: 1px solid #70767a; }

.btn-group.dropleft .btn-secondary:not(.dropdown-toggle-split) {
  border-left: 1px solid #8353dc; }

/*
    Btn group dropdown-toggle
*/
.btn .badge.badge-align-right {
  position: absolute;
  top: -1px;
  right: 8px; }

.dropup .btn .caret {
  border-bottom-color: #0e1726; }

.btn-outline-primary:not(:disabled):not(.disabled).active, .btn-outline-primary:not(:disabled):not(.disabled):active {
  background-color: #4361ee;
  color: #fff !important; }

.show > .btn-outline-primary.dropdown-toggle {
  background-color: #4361ee;
  color: #fff !important; }

.btn-outline-success:not(:disabled):not(.disabled).active, .btn-outline-success:not(:disabled):not(.disabled):active {
  background-color: #1abc9c;
  color: #fff !important; }

.show > .btn-outline-success.dropdown-toggle {
  background-color: #1abc9c;
  color: #fff !important; }

.btn-outline-info:not(:disabled):not(.disabled).active, .btn-outline-info:not(:disabled):not(.disabled):active {
  background-color: #2196f3;
  color: #fff !important; }

.show > .btn-outline-info.dropdown-toggle {
  background-color: #2196f3;
  color: #fff !important; }

.btn-outline-danger:not(:disabled):not(.disabled).active, .btn-outline-danger:not(:disabled):not(.disabled):active {
  background-color: #e7515a;
  color: #fff !important; }

.show > .btn-outline-danger.dropdown-toggle {
  background-color: #e7515a;
  color: #fff !important; }

.btn-outline-warning:not(:disabled):not(.disabled).active, .btn-outline-warning:not(:disabled):not(.disabled):active {
  background-color: #e2a03f;
  color: #fff !important; }

.show > .btn-outline-warning.dropdown-toggle {
  background-color: #e2a03f;
  color: #fff !important; }

.btn-outline-secondary:not(:disabled):not(.disabled).active, .btn-outline-secondary:not(:disabled):not(.disabled):active {
  background-color: #805dca;
  color: #fff !important; }

.show > .btn-outline-secondary.dropdown-toggle {
  background-color: #805dca;
  color: #fff !important; }

.btn-outline-dark:not(:disabled):not(.disabled).active, .btn-outline-dark:not(:disabled):not(.disabled):active {
  background-color: #3b3f5c;
  color: #fff !important; }

.show > .btn-outline-dark.dropdown-toggle {
  background-color: #3b3f5c;
  color: #fff !important; }

.show > .btn-outline-primary.dropdown-toggle:after, .show > .btn-outline-success.dropdown-toggle:after, .show > .btn-outline-info.dropdown-toggle:after, .show > .btn-outline-danger.dropdown-toggle:after, .show > .btn-outline-warning.dropdown-toggle:after, .show > .btn-outline-secondary.dropdown-toggle:after, .show > .btn-outline-dark.dropdown-toggle:after, .show > .btn-outline-primary.dropdown-toggle:before, .show > .btn-outline-success.dropdown-toggle:before, .show > .btn-outline-info.dropdown-toggle:before, .show > .btn-outline-danger.dropdown-toggle:before, .show > .btn-outline-warning.dropdown-toggle:before, .show > .btn-outline-secondary.dropdown-toggle:before, .show > .btn-outline-dark.dropdown-toggle:before {
  color: #fff !important; }

.btn-outline-primary {
  border: 1px solid #4361ee !important;
  color: #4361ee !important;
  background-color: transparent;
  box-shadow: none; }

.btn-outline-info {
  border: 1px solid #2196f3 !important;
  color: #2196f3 !important;
  background-color: transparent;
  box-shadow: none; }

.btn-outline-warning {
  border: 1px solid #e2a03f !important;
  color: #e2a03f !important;
  background-color: transparent;
  box-shadow: none; }

.btn-outline-success {
  border: 1px solid #1abc9c !important;
  color: #1abc9c !important;
  background-color: transparent;
  box-shadow: none; }

.btn-outline-danger {
  border: 1px solid #e7515a !important;
  color: #e7515a !important;
  background-color: transparent;
  box-shadow: none; }

.btn-outline-secondary {
  border: 1px solid #805dca !important;
  color: #805dca !important;
  background-color: transparent;
  box-shadow: none; }

.btn-outline-dark {
  border: 1px solid #3b3f5c !important;
  color: #3b3f5c !important;
  background-color: transparent;
  box-shadow: none; }

.btn-outline-primary:hover, .btn-outline-info:hover, .btn-outline-warning:hover, .btn-outline-success:hover, .btn-outline-danger:hover, .btn-outline-secondary:hover, .btn-outline-dark:hover {
  box-shadow: 0px 5px 20px 0 rgba(0, 0, 0, 0.1); }

.btn-outline-primary:hover {
  color: #fff !important;
  background-color: #4361ee;
  box-shadow: 0 10px 20px -10px #4361ee; }

.btn-outline-info:hover {
  color: #fff !important;
  background-color: #2196f3;
  box-shadow: 0 10px 20px -10px #2196f3; }

.btn-outline-warning:hover {
  color: #fff !important;
  background-color: #e2a03f;
  box-shadow: 0 10px 20px -10px #e2a03f; }

.btn-outline-success:hover {
  color: #fff !important;
  background-color: #1abc9c;
  box-shadow: 0 10px 20px -10px #1abc9c; }

.btn-outline-danger:hover {
  color: #fff !important;
  background-color: #e7515a;
  box-shadow: 0 10px 20px -10px #e7515a; }

.btn-outline-secondary:hover {
  color: #fff !important;
  background-color: #805dca;
  box-shadow: 0 10px 20px -10px #805dca; }

.btn-outline-dark:hover {
  color: #fff !important;
  background-color: #3b3f5c;
  box-shadow: 0 10px 20px -10px #3b3f5c; }

/*      Dropdown Toggle       */
.btn-rounded {
  -webkit-border-radius: 1.875rem !important;
  -moz-border-radius: 1.875rem !important;
  -ms-border-radius: 1.875rem !important;
  -o-border-radius: 1.875rem !important;
  border-radius: 1.875rem !important; }

/*
    ===========================
        Data Marker ( dot )
    ===========================
*/
.data-marker {
  padding: 2px;
  border-radius: 50%;
  font-size: 18px;
  display: inline-flex;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  align-items: center;
  justify-content: center; }

.data-marker-success {
  background-color: #1abc9c; }

.data-marker-warning {
  background-color: #e2a03f; }

.data-marker-danger, .data-marker-info, .data-marker-dark {
  background-color: #e7515a; }

.badge {
  font-weight: 600;
  line-height: 1.4;
  padding: 3px 6px;
  font-size: 12px;
  font-weight: 600;
  transition: all 0.3s ease-out;
  -webkit-transition: all 0.3s ease-out; }
  .badge:hover {
    transition: all 0.3s ease-out;
    -webkit-transition: all 0.3s ease-out;
    -webkit-transform: translateY(-3px);
    transform: translateY(-3px); }
  .badge.badge-enabled {
    background-color: #1abc9c;
    color: #fff; }
  .badge.badge-disable {
    background-color: #e7515a;
    color: #fff; }

.badge-pills {
  border-radius: 30px; }

.badge-classic {
  border-radius: 0; }

.badge-collapsed-img img {
  width: 40px;
  height: 40px;
  border-radius: 20px;
  border: 2px solid #ffffff;
  box-shadow: 0px 0px 15px 1px rgba(113, 106, 202, 0.3);
  margin-left: -21px; }

.badge-collapsed-img.badge-tooltip img {
  width: 40px;
  height: 40px;
  border-radius: 20px;
  border: 2px solid #ffffff;
  box-shadow: 0px 0px 15px 1px rgba(113, 106, 202, 0.3);
  margin-left: -21px;
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease; }
  .badge-collapsed-img.badge-tooltip img:hover {
    -webkit-transform: translateY(-5px) scale(1.02);
    transform: translateY(-5px) scale(1.02); }

.badge-collapsed-img.translateY-axis img {
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease; }
  .badge-collapsed-img.translateY-axis img:hover {
    -webkit-transform: translateY(-5px) scale(1.02);
    transform: translateY(-5px) scale(1.02); }

.badge-collapsed-img.rectangle-collapsed img {
  width: 45px;
  height: 32px; }

.badge-collapsed-img.translateX-axis img {
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease; }
  .badge-collapsed-img.translateX-axis img:hover {
    -webkit-transform: translateX(5px) scale(1.02);
    transform: translateX(5px) scale(1.02); }

.badge-primary {
  color: #fff;
  background-color: #4361ee; }

.badge-info {
  color: #fff;
  background-color: #2196f3; }

.badge-success {
  color: #fff;
  background-color: #1abc9c; }

.badge-danger {
  color: #fff;
  background-color: #e7515a; }

.badge-warning {
  color: #fff;
  background-color: #e2a03f; }

.badge-dark {
  color: #fff;
  background-color: #3b3f5c; }

.badge-secondary {
  background-color: #805dca; }

.outline-badge-primary {
  color: #4361ee;
  background-color: transparent;
  border: 1px solid #4361ee; }

.outline-badge-info {
  color: #2196f3;
  background-color: transparent;
  border: 1px solid #2196f3; }

.outline-badge-success {
  color: #1abc9c;
  background-color: transparent;
  border: 1px solid #1abc9c; }

.outline-badge-danger {
  color: #e7515a;
  background-color: transparent;
  border: 1px solid #e7515a; }

.outline-badge-warning {
  color: #e2a03f;
  background-color: transparent;
  border: 1px solid #e2a03f; }

.outline-badge-dark {
  color: #3b3f5c;
  background-color: transparent;
  border: 1px solid #3b3f5c; }

.outline-badge-secondary {
  color: #805dca;
  background-color: transparent;
  border: 1px solid #805dca; }

.outline-badge-primary:focus, .outline-badge-primary:hover {
  background-color: #eaf1ff;
  color: #4361ee; }

.outline-badge-secondary:focus, .outline-badge-secondary:hover {
  color: #805dca;
  background-color: #f3effc; }

.outline-badge-success:focus, .outline-badge-success:hover {
  color: #1abc9c;
  background-color: #ddf5f0; }

.outline-badge-danger:focus, .outline-badge-danger:hover {
  color: #e7515a;
  background-color: #fff5f5; }

.outline-badge-warning:focus, .outline-badge-warning:hover {
  color: #e2a03f;
  background-color: #fff9ed; }

.outline-badge-info:focus, .outline-badge-info:hover {
  color: #2196f3;
  background-color: #e7f7ff; }

.outline-badge-dark:focus, .outline-badge-dark:hover {
  color: #3b3f5c;
  background-color: #e3e4eb; }

/*      Link     */
.badge[class*="link-badge-"] {
  cursor: pointer; }

.link-badge-primary {
  color: #4361ee;
  background-color: transparent;
  border: 1px solid transparent; }

.link-badge-info {
  color: #2196f3;
  background-color: transparent;
  border: 1px solid transparent; }

.link-badge-success {
  color: #1abc9c;
  background-color: transparent;
  border: 1px solid transparent; }

.link-badge-danger {
  color: #e7515a;
  background-color: transparent;
  border: 1px solid transparent; }

.link-badge-warning {
  color: #e2a03f;
  background-color: transparent;
  border: 1px solid transparent; }

.link-badge-dark {
  color: #3b3f5c;
  background-color: transparent;
  border: 1px solid transparent; }

.link-badge-secondary {
  color: #805dca;
  background-color: transparent;
  border: 1px solid transparent; }

.link-badge-primary:focus, .link-badge-primary:hover {
  color: #4361ee;
  background-color: transparent; }

.link-badge-secondary:focus, .link-badge-secondary:hover {
  color: #6f51ea;
  background-color: transparent; }

.link-badge-success:focus, .link-badge-success:hover {
  color: #2ea37d;
  background-color: transparent; }

.link-badge-danger:focus, .link-badge-danger:hover {
  color: #e7515a;
  background-color: transparent; }

.link-badge-warning:focus, .link-badge-warning:hover {
  color: #dea82a;
  background-color: transparent; }

.link-badge-info:focus, .link-badge-info:hover {
  color: #009eda;
  background-color: transparent; }

.link-badge-dark:focus, .link-badge-dark:hover {
  color: #454656;
  background-color: transparent; }

/* Custom Dropdown*/
.custom-dropdown .dropdown-toggle::after, .custom-dropdown-icon .dropdown-toggle::after, .custom-dropdown .dropdown-toggle::before, .custom-dropdown-icon .dropdown-toggle::before {
  display: none; }

.custom-dropdown .dropdown-menu, .custom-dropdown-icon .dropdown-menu {
  min-width: 11rem;
  border-radius: 4px;
  border: none;
  border: 1px solid #e0e6ed;
  z-index: 899;
  box-shadow: rgba(113, 106, 202, 0.2) 0px 0px 15px 1px;
  top: 15px !important;
  padding: 10px;
  border-width: initial;
  border-style: none;
  border-color: initial;
  border-image: initial; }

.custom-dropdown .dropdown-item.active, .custom-dropdown .dropdown-item:active, .custom-dropdown .dropdown-item:hover {
  color: #888ea8;
  background-color: #f1f2f3; }

.custom-dropdown-icon .dropdown-item.active, .custom-dropdown-icon .dropdown-item:active, .custom-dropdown-icon .dropdown-item:hover {
  color: #888ea8;
  background-color: #f1f2f3; }

.custom-dropdown .dropdown-item {
  font-size: 13px;
  color: #888ea8;
  display: block;
  font-weight: 700;
  padding: 11px 8px;
  font-size: 12px; }

.custom-dropdown-icon .dropdown-item {
  font-size: 13px;
  color: #888ea8;
  display: block;
  font-weight: 700;
  padding: 11px 8px;
  font-size: 12px; }

.custom-dropdown-icon .dropdown-menu .dropdown-item svg {
  width: 20px;
  height: 20px;
  margin-right: 3px;
  color: #888ea8; }

.custom-dropdown .dropdown-item.active svg, .custom-dropdown .dropdown-item:active svg, .custom-dropdown .dropdown-item:hover svg {
  color: #4361ee; }

.custom-dropdown-icon .dropdown-item.active svg, .custom-dropdown-icon .dropdown-item:active svg, .custom-dropdown-icon .dropdown-item:hover svg {
  color: #4361ee; }

.status.rounded-tooltip .tooltip-inner {
  border-radius: 20px;
  padding: 8px 20px; }

.tooltip-inner {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0; }

.popover {
  z-index: 999;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
  border-bottom-color: #b3b3b3; }

input[disabled], select[disabled], textarea[disabled], input[readonly], select[readonly], textarea[readonly] {
  cursor: not-allowed;
  background-color: #f1f2f3 !important;
  color: #bfc9d4; }

.help-block, .help-inline {
  color: #555555; }

.controls {
  position: relative; }

.search-form-control {
  border-radius: .25rem; }

/*  Table   */
.table-bordered {
  border: 1px solid #f1f2f3; }

.table-striped tbody tr:nth-of-type(odd) {
  background-color: #f1f2f3 !important; }

.table > tbody > tr > td {
  vertical-align: middle;
  color: #515365;
  font-size: 13px;
  letter-spacing: 1px; }

.table > thead > tr > th {
  color: #4361ee;
  font-weight: 700;
  font-size: 13px;
  letter-spacing: 1px;
  text-transform: uppercase; }

.table > tbody > tr > td .usr-img-frame {
  background-color: #ebedf2;
  padding: 2px;
  width: 35px;
  height: 35px; }
  .table > tbody > tr > td .usr-img-frame img {
    width: 35px;
    margin: 0; }

.table > tbody > tr > td .admin-name {
  font-weight: 700;
  color: #515365; }

.table > tbody > tr > td .progress {
  width: 135px;
  height: 6px;
  margin: auto 0; }

.table > tbody > tr > td svg.icon {
  width: 21px; }

.table > tbody > tr > td .t-dot {
  background-color: #000;
  height: 11px;
  width: 11px;
  border-radius: 50%;
  cursor: pointer;
  margin: 0 auto; }

.table > tbody > tr > td svg.t-icon {
  padding: 5px;
  border-radius: 50%;
  font-size: 11px;
  vertical-align: sub;
  cursor: pointer; }
  .table > tbody > tr > td svg.t-icon.t-hover-icon:hover {
    background-color: #e7515a;
    color: #fff; }

.table-bordered td, .table-bordered th {
  border: 1px solid #ebedf2; }

.table thead th {
  vertical-align: bottom;
  border-bottom: none; }

.table-hover:not(.table-dark) tbody tr:hover {
  background-color: #f1f2f3 !important; }

.table-controls > li > a svg {
  color: #25d5e4; }

.table tr td .custom-dropdown.t-custom-dropdown a.dropdown-toggle, .table tr td .custom-dropdown-icon.t-custom-dropdown a.dropdown-toggle {
  border-radius: 5px;
  border: 1px solid #d3d3d3; }

.table-controls > li > a svg {
  color: #888ea8;
  width: 21px; }

/*  Table Dark      */
.table.table-dark > thead > tr > th {
  color: #d3d3d3; }

.table.table-dark > tbody > tr > td {
  color: #ffffff; }

.table-dark {
  background-color: #060818; }
  .table-dark.table-hover tbody tr {
    background-color: #060818; }
  .table-dark td, .table-dark th, .table-dark thead th {
    border-color: #191e3a !important; }
  .table-dark.table-hover tbody tr:hover {
    background-color: rgba(25, 30, 58, 0.631373); }

.table.table-dark > tbody > tr > td i.t-icon {
  padding: 5px;
  border-radius: 50%;
  font-size: 14px;
  vertical-align: sub;
  cursor: pointer;
  color: #0e1726 !important; }

table .badge-success, table .badge-primary, table .badge-warning, table .badge-danger, table .badge-info, table .badge-secondary, table .badge-dark {
  box-shadow: 0px 5px 20px 0 rgba(0, 0, 0, 0.2);
  will-change: opacity, transform;
  transition: all 0.3s ease-out;
  -webkit-transition: all 0.3s ease-out; }

.table > tfoot > tr > th {
  color: #3b3f5c; }

.table-vertical-align tr, .table-vertical-align th, .table-vertical-align td {
  vertical-align: middle !important; }

.statbox .widget-content:before, .statbox .widget-content:after {
  display: table;
  content: "";
  line-height: 0;
  clear: both; }

.nav-tabs > li > a {
  -webkit-border-radius: 0 !important;
  -moz-border-radius: 0 !important;
  border-radius: 0 !important; }

.btn-toolbar {
  margin-left: 0px; }

@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .input-group > .form-control {
    flex: 1 1 auto;
    width: 1%; } }

.spin {
  -webkit-animation: spin 2s infinite linear;
  animation: spin 2s infinite linear; }

@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg); } }

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg); } }

.toast-primary {
  background: #4361ee; }

.toast-header {
  background: #4361ee;
  color: #fff;
  border-bottom: 1px solid rgba(33, 150, 243, 0.341176); }
  .toast-header .meta-time {
    color: #f1f2f3; }
  .toast-header .close {
    color: #f1f2f3;
    opacity: 1;
    text-shadow: none; }

.toast-body {
  padding: 16px 12px;
  color: #fff; }

/*  
    ==========================
        Background Colors  
    ==========================
*/
/*  
    Default  
*/
.bg-primary {
  background-color: #4361ee !important;
  border-color: #4361ee;
  color: #fff; }

.bg-success {
  background-color: #1abc9c !important;
  border-color: #1abc9c;
  color: #fff; }

.bg-info {
  background-color: #2196f3 !important;
  border-color: #2196f3;
  color: #fff; }

.bg-warning {
  background-color: #e2a03f !important;
  border-color: #e2a03f;
  color: #fff; }

.bg-danger {
  background-color: #e7515a !important;
  border-color: #e7515a;
  color: #fff; }

.bg-secondary {
  background-color: #805dca !important;
  border-color: #805dca;
  color: #fff; }

.bg-dark {
  background-color: #fff;
  border-color: #3b3f5c;
  color: #fff; }

/*  
    Light Background  
*/
.bg-light-primary {
  background-color: #eaf1ff !important;
  border-color: #eaf1ff;
  color: #2196f3; }

.bg-light-success {
  background-color: #ddf5f0 !important;
  border-color: #ddf5f0;
  color: #1abc9c; }

.bg-light-info {
  background-color: #e7f7ff !important;
  border-color: #e7f7ff;
  color: #2196f3; }

.bg-light-warning {
  background-color: #fff9ed !important;
  border-color: #fff9ed;
  color: #e2a03f; }

.bg-light-danger {
  background-color: #fff5f5 !important;
  border-color: #fff5f5;
  color: #e7515a; }

.bg-light-secondary {
  background-color: #f3effc !important;
  border-color: #f3effc;
  color: #805dca; }

.bg-light-dark {
  background-color: #e3e4eb;
  border-color: #e3e4eb;
  color: #fff; }

/*  
    Progress Bar
*/
.progress {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  background-color: #ebedf2;
  margin-bottom: 1.25rem;
  height: 16px;
  box-shadow: 1px 3px 20px 3px #f1f2f3; }
  .progress.progress-bar-stack .progress-bar:last-child {
    border-top-right-radius: 16px;
    border-bottom-right-radius: 16px; }
  .progress .progress-bar {
    font-size: 10px;
    font-weight: 700;
    box-shadow: 0 2px 4px rgba(0, 69, 255, 0.15), 0 8px 16px rgba(0, 69, 255, 0.2);
    font-size: 12px;
    letter-spacing: 1px;
    font-weight: 100; }
  .progress:not(.progress-bar-stack) .progress-bar {
    border-radius: 16px; }

.progress-sm {
  height: 4px; }

.progress-md {
  height: 10px; }

.progress-lg {
  height: 20px; }

.progress-xl {
  height: 25px; }

.progress-striped .progress-bar {
  background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent); }

.progress .progress-title {
  display: flex;
  justify-content: space-between;
  padding: 15px; }
  .progress .progress-title span {
    align-self: center; }

.progress .progress-bar.bg-gradient-primary {
  background-color: #4361ee;
  background: linear-gradient(to right, #0081ff 0%, #0045ff 100%); }

.progress .progress-bar.bg-gradient-info {
  background-color: #4361ee;
  background-image: linear-gradient(to right, #04befe 0%, #4481eb 100%); }

.progress .progress-bar.bg-gradient-success {
  background-color: #4361ee;
  background-image: linear-gradient(to right, #3cba92 0%, #0ba360 100%); }

.progress .progress-bar.bg-gradient-warning {
  background-color: #4361ee;
  background-image: linear-gradient(to right, #f09819 0%, #ff5858 100%); }

.progress .progress-bar.bg-gradient-secondary {
  background-color: #4361ee;
  background-image: linear-gradient(to right, #7579ff 0%, #b224ef 100%); }

.progress .progress-bar.bg-gradient-danger {
  background-color: #4361ee;
  background-image: linear-gradient(to right, #d09693 0%, #c71d6f 100%); }

.progress .progress-bar.bg-gradient-dark {
  background-color: #4361ee;
  background-image: linear-gradient(to right, #2b5876 0%, #4e4376 100%); }

.br-0 {
  border-radius: 0 !important; }

.br-4 {
  border-radius: 4px !important; }

.br-6 {
  border-radius: 6px !important; }

.br-30 {
  border-radius: 30px !important; }

.br-50 {
  border-radius: 50px !important; }

.br-left-30 {
  border-top-left-radius: 30px !important;
  border-bottom-left-radius: 30px !important; }

.br-right-30 {
  border-top-right-radius: 30px !important;
  border-bottom-right-radius: 30px !important; }

.bx-top-6 {
  border-top-right-radius: 6px !important;
  border-top-left-radius: 6px !important; }

.bx-bottom-6 {
  border-bottom-right-radius: 6px !important;
  border-bottom-left-radius: 6px !important; }

/*      Badge Custom      */
.badge.counter {
  position: absolute;
  z-index: 2;
  right: 0;
  top: -10px;
  font-weight: 600;
  width: 19px;
  height: 19px;
  border-radius: 50%;
  padding: 2px 0px;
  font-size: 12px; }

.badge-chip {
  display: inline-block;
  padding: 0 25px;
  font-size: 16px;
  line-height: 42px;
  border-radius: 25px; }
  .badge-chip img {
    float: left;
    margin: 0px 10px 0px -26px;
    height: 44px;
    width: 44px;
    border-radius: 50%; }
  .badge-chip .closebtn {
    color: #f1f2f3;
    font-weight: bold;
    float: right;
    font-size: 20px;
    cursor: pointer; }
    .badge-chip .closebtn:hover {
      color: #fff; }

/*-------text-colors------*/
.text-primary {
  color: #4361ee !important; }

.text-success {
  color: #1abc9c !important; }

.text-info {
  color: #2196f3 !important; }

.text-danger {
  color: #e7515a !important; }

.text-warning {
  color: #e2a03f !important; }

.text-secondary {
  color: #805dca !important; }

.text-dark {
  color: #3b3f5c !important; }

.text-muted {
  color: #888ea8 !important; }

.text-white {
  color: #fff !important; }

.text-black {
  color: #000 !important; }

/*-----border main------*/
.border {
  border: 1px solid !important; }

.border-bottom {
  border-bottom: 1px solid !important; }

.border-top {
  border-top: 1px solid !important; }

.border-right {
  border-right: 1px solid !important; }

.border-left {
  border-left: 1px solid !important; }

.border-primary {
  border-color: #4361ee !important; }

.border-info {
  border-color: #2196f3 !important; }

.border-warning {
  border-color: #e2a03f !important; }

.border-success {
  border-color: #1abc9c !important; }

.border-danger {
  border-color: #e7515a !important; }

.border-secondary {
  border-color: #805dca !important; }

.border-dark {
  border-color: #3b3f5c !important; }

/*-----border style------*/
.border-dotted {
  border-style: dotted !important; }

.border-dashed {
  border-style: dashed !important; }

.border-solid {
  border-style: solid !important; }

.border-double {
  border-style: double !important; }

/*-----border width------*/
.border-width-1px {
  border-width: 1px !important; }

.border-width-2px {
  border-width: 2px !important; }

.border-width-3px {
  border-width: 3px !important; }

.border-width-4px {
  border-width: 4px !important; }

.border-width-5px {
  border-width: 5px !important; }

.border-width-6px {
  border-width: 6px !important; }

/*-----transform-position------*/
.position-absolute {
  position: absolute; }

.position-static {
  position: static; }

.position-fixed {
  position: fixed; }

.position-inherit {
  position: inherit; }

.position-initial {
  position: initial; }

.position-relative {
  position: relative; }

</style>
<style>
  /*
	===============================
			@Import	Function
	===============================
*/
/*
	===============================
			@Import	Mixins
	===============================
*/
html {
  min-height: 100%; }

body {
  color: #888ea8;
  height: 100%;
  font-size: 0.875rem;
  background: #fafafa;
  overflow-x: hidden;
  overflow-y: auto;
  letter-spacing: 0.0312rem;
  font-family: 'Quicksand', sans-serif; }

h1, h2, h3, h4, h5, h6 {
  color: #3b3f5c; }

:focus {
  outline: none; }

::-moz-selection {
  /* Code for Firefox */
  color: #4361ee;
  background: transparent; }

::selection {
  color: #4361ee;
  background: transparent; }

p {
  margin-top: 0;
  margin-bottom: 0.625rem;
  color: #515365; }

hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border-top: 1px solid #f1f2f3; }

strong {
  font-weight: 600; }

code {
  color: #e7515a; }

/*Page title*/
.navbar .navbar-item .nav-item.page-heading {
  margin-left: 20px; }

.navbar.expand-header .navbar-item .nav-item.page-heading {
  margin-left: 25px; }

.main-container {
  min-height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start; }

#container.fixed-header {
  margin-top: 56px; }

#content {
  width: 50%;
  flex-grow: 8;
  margin-top: 80px;
  margin-bottom: 0;
  margin-left: 255px;
  -webkit-transition: .3s ease all;
  transition: .3s ease all; }

.main-container-fluid > .main-content > .container {
  float: left;
  width: 100%; }

#content > .wrapper {
  -webkit-transition: margin ease-in-out .1s;
  -moz-transition: margin ease-in-out .1s;
  -o-transition: margin ease-in-out .1s;
  transition: margin ease-in-out .1s;
  position: relative; }

.widget {
  padding: 0;
  margin-top: 0;
  margin-bottom: 0;
  border-radius: 6px;
  border: 1px solid #e0e6ed;
  box-shadow: 0 0 40px 0 rgba(94, 92, 154, 0.06); }

.layout-top-spacing {
  margin-top: 20px; }

.layout-spacing {
  padding-bottom: 40px; }

.layout-px-spacing {
  padding: 0 20px 0 20px !important;
  min-height: calc(100vh - 140px) !important; }

.widget.box .widget-header {
  background: #fff;
  padding: 0px 8px 0px;
  border-top-right-radius: 6px;
  border-top-left-radius: 6px; }

.row [class*="col-"] .widget .widget-header h4 {
  color: #3b3f5c;
  font-size: 17px;
  font-weight: 600;
  margin: 0;
  padding: 16px 15px; }

.seperator-header {
  background: transparent;
  box-shadow: none;
  margin-bottom: 40px;
  border-radius: 0; }
  .seperator-header h4 {
    margin-bottom: 0;
    line-height: 1.4;
    padding: 5px 8px;
    font-size: 15px;
    border-radius: 4px;
    letter-spacing: 1px;
    display: inline-block;
    background: rgba(0, 150, 136, 0.26);
    color: #009688;
    font-weight: 500; }

.widget .widget-header {
  border-bottom: 0px solid #f1f2f3; }
  .widget .widget-header:before {
    display: table;
    content: "";
    line-height: 0; }
  .widget .widget-header:after {
    display: table;
    content: "";
    line-height: 0;
    clear: both; }

.widget-content-area {
  padding: 20px;
  position: relative;
  background-color: #fff;
  border-bottom-left-radius: 6px;
  border-bottom-right-radius: 6px; }

.content-area {
  max-width: 58.333333%;
  margin-left: 80px; }

/* 
=====================
    Navigation Bar
=====================
*/
.header-container {
  z-index: 1030; }

.navbar {
  padding: 0;
  min-height: 80px;
  background: #445ede;
  -webkit-transition: .3s ease all;
  transition: .3s ease all;
  -webkit-box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07);
  -moz-box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07);
  box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07); }
  .navbar.expand-header {
    padding: 0; }

.navbar-brand {
  width: 5.5rem;
  padding-top: 0.0rem;
  padding-bottom: 0.0rem;
  margin-right: 0.0rem; }

.navbar .border-underline {
  border-left: 1px solid #ccc;
  height: 20px;
  margin-top: 18px;
  margin-left: -5px;
  margin-right: 8px; }

.navbar-expand-sm .navbar-item {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }

.header-container .navbar-nav.theme-brand {
  width: 255px;
  height: 80px;
  display: flex;
  justify-content: space-around;
  background: #fff;
  border-right: 1px solid #445ede;
  background-image: linear-gradient(to right, #445ede 0%, #304aca 100%); }
  .header-container .navbar-nav.theme-brand .theme-logo {
    align-self: center;
    opacity: 1;
    width: 47px; }
    .header-container .navbar-nav.theme-brand .theme-logo img {
      width: 48px;
      height: 48px; }

.header-container .navbar-nav .theme-text {
  align-self: center;
  opacity: 1;
  width: 68px; }
  .header-container .navbar-nav .theme-text a {
    padding: 0;
    font-size: 25px;
    font-weight: 600;
    color: #fff;
    letter-spacing: 0px; }

.header-container .toggle-sidebar {
  align-self: center; }

.header-container .sidebarCollapse svg {
  width: 27px;
  height: 27px;
  color: #fff;
  stroke-width: 2px; }

.navbar-expand-sm .navbar-item .nav-link {
  line-height: 2.75rem;
  padding: 6.24px 9.6px;
  text-transform: initial;
  position: unset; }

.dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .custom-dropdown .dropdown-item.active svg, .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .custom-dropdown .dropdown-item:active svg, .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .custom-dropdown .dropdown-item:hover svg {
  color: #304aca !important;
  fill: rgba(48, 74, 202, 0.309804) !important; }

.dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .custom-dropdown-icon .dropdown-item.active svg, .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .custom-dropdown-icon .dropdown-item:active svg, .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .custom-dropdown-icon .dropdown-item:hover svg {
  color: #304aca !important;
  fill: rgba(48, 74, 202, 0.309804) !important; }

.navbar .dropdown-menu {
  border-radius: 6px;
  border-color: #e0e6ed; }

.navbar .dropdown-item {
  line-height: 1.8;
  font-size: 0.96rem;
  padding: 15px 0 15px 0;
  word-wrap: normal; }

.navbar .navbar-item .nav-item.dropdown.show a.nav-link span {
  color: #805dca !important; }
  .navbar .navbar-item .nav-item.dropdown.show a.nav-link span.badge {
    background-color: #888ea8 !important; }

.navbar .navbar-item .nav-item .dropdown-item.active, .navbar .navbar-item .nav-item .dropdown-item:active {
  background-color: transparent;
  color: #16181b; }

.navbar .navbar-item .nav-item.dropdown .nav-link:hover span {
  color: #805dca !important; }

.navbar .navbar-item .nav-item.dropdown .dropdown-menu {
  /* top: 109%; */
  top: 63px !important;
  border-radius: 0;
  border: none;
  border-radius: 6px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(31, 45, 61, 0.1);
  box-shadow: 0 10px 30px 0 rgba(31, 45, 61, 0.1);
  background: #fff;
  border: 1px solid #e0e6ed;
  -webkit-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out; }
  .navbar .navbar-item .nav-item.dropdown .dropdown-menu .dropdown-item {
    border-radius: 0; }
  .navbar .navbar-item .nav-item.dropdown .dropdown-menu .dropdown-item-collapsable {
    position: relative; }
    .navbar .navbar-item .nav-item.dropdown .dropdown-menu .dropdown-item-collapsable ul {
      padding-left: 30px; }
    .navbar .navbar-item .nav-item.dropdown .dropdown-menu .dropdown-item-collapsable li {
      list-style: none; }
    .navbar .navbar-item .nav-item.dropdown .dropdown-menu .dropdown-item-collapsable ul li a {
      position: relative;
      font-weight: 500; }
      .navbar .navbar-item .nav-item.dropdown .dropdown-menu .dropdown-item-collapsable ul li a.active {
        color: #304aca; }
        .navbar .navbar-item .nav-item.dropdown .dropdown-menu .dropdown-item-collapsable ul li a.active:before {
          background-color: #3b3f5c; }
    .navbar .navbar-item .nav-item.dropdown .dropdown-menu .dropdown-item-collapsable svg.feather-chevron-down {
      position: absolute;
      right: 15px;
      top: 11px;
      fill: transparent !important;
      transform: rotate(270deg);
      -webkit-transition: -webkit-transform .2s ease-in-out;
      transition: -webkit-transform .2s ease-in-out;
      transition: transform .2s ease-in-out;
      transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out; }
    .navbar .navbar-item .nav-item.dropdown .dropdown-menu .dropdown-item-collapsable.show svg.feather-chevron-down {
      transform: rotate(360deg); }
    .navbar .navbar-item .nav-item.dropdown .dropdown-menu .dropdown-item-collapsable ul li a:before {
      content: '';
      background-color: #d3d3d3;
      position: absolute;
      height: 3px;
      width: 3px;
      top: 11px;
      left: 13px;
      border-radius: 50%; }

.navbar .apps-dropdown {
  align-self: center;
  margin-left: 21px; }
  .navbar .apps-dropdown .custom-dropdown-icon {
    margin-right: 20px; }
    .navbar .apps-dropdown .custom-dropdown-icon a.dropdown-toggle {
      position: relative;
      padding: 14px 17px 14px 10px;
      border: 1px solid #304aca;
      border-radius: 6px;
      transform: none;
      font-size: 11px;
      line-height: 17px;
      background-color: #304aca;
      letter-spacing: normal;
      min-width: 128px;
      text-align: inherit;
      color: #fff;
      box-shadow: none;
      max-height: 50px;
      letter-spacing: 1px; }
      .navbar .apps-dropdown .custom-dropdown-icon a.dropdown-toggle img {
        width: 17px;
        height: 17px;
        margin-right: 9px; }
      .navbar .apps-dropdown .custom-dropdown-icon a.dropdown-toggle svg:not(.feather-chevron-down) {
        margin-right: 9px;
        stroke-width: 1;
        width: 17px;
        height: 17px; }
      .navbar .apps-dropdown .custom-dropdown-icon a.dropdown-toggle svg.feather-chevron-down {
        position: absolute;
        right: 4px;
        top: 16px;
        color: #fafafa;
        width: 13px;
        height: 13px;
        margin: 0;
        -webkit-transition: -webkit-transform .2s ease-in-out;
        transition: -webkit-transform .2s ease-in-out;
        transition: transform .2s ease-in-out;
        transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out; }
    .navbar .apps-dropdown .custom-dropdown-icon.show a.dropdown-toggle svg.feather-chevron-down {
      -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
      transform: rotate(180deg); }
    .navbar .apps-dropdown .custom-dropdown-icon .dropdown-menu {
      position: absolute;
      left: 0px !important;
      /* top: 56px!important; */
      /* top: 63px!important; */
      padding: 8px 0;
      border: none;
      min-width: 155px;
      border: 1px solid #d3d3d3; }
      .navbar .apps-dropdown .custom-dropdown-icon .dropdown-menu.show {
        top: 56px !important; }
      .navbar .apps-dropdown .custom-dropdown-icon .dropdown-menu a {
        padding: 4px 24px;
        font-size: 13px;
        font-weight: 600;
        color: #888ea8;
        letter-spacing: 0px;
        line-height: 27px; }

.navbar .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown).apps-dropdown .custom-dropdown-icon .dropdown-menu a svg {
  fill: rgba(136, 142, 168, 0.231373);
  stroke-width: 1px;
  vertical-align: middle; }

.navbar .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown).apps-dropdown .custom-dropdown-icon .dropdown-menu a:hover {
  background-color: transparent;
  color: #3b3f5c;
  border-radius: 0 !important; }

.navbar .language-dropdown {
  align-self: center; }
  .navbar .language-dropdown .custom-dropdown-icon {
    margin-right: 20px; }
    .navbar .language-dropdown .custom-dropdown-icon a.dropdown-toggle {
      position: relative;
      padding: 14px 17px 14px 10px;
      border: 1px solid #304aca;
      border-radius: 6px;
      transform: none;
      font-size: 11px;
      line-height: 17px;
      background-color: #304aca;
      letter-spacing: normal;
      min-width: 98px;
      text-align: inherit;
      color: #fff;
      box-shadow: none;
      max-height: 50px;
      letter-spacing: 1px; }
      .navbar .language-dropdown .custom-dropdown-icon a.dropdown-toggle img {
        width: 17px;
        height: 17px;
        margin-right: 9px;
        display: none; }
      .navbar .language-dropdown .custom-dropdown-icon a.dropdown-toggle svg {
        position: absolute;
        right: 4px;
        top: 16px;
        color: #fafafa;
        width: 13px;
        height: 13px;
        margin: 0;
        -webkit-transition: -webkit-transform .2s ease-in-out;
        transition: -webkit-transform .2s ease-in-out;
        transition: transform .2s ease-in-out;
        transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out; }
    .navbar .language-dropdown .custom-dropdown-icon.show a.dropdown-toggle svg {
      -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
      transform: rotate(180deg); }
    .navbar .language-dropdown .custom-dropdown-icon .dropdown-menu {
      position: absolute;
      right: 1px;
      /* top: 56px!important; */
      padding: 8px 8px;
      border: none;
      min-width: 155px;
      border: 1px solid #d3d3d3; }
      .navbar .language-dropdown .custom-dropdown-icon .dropdown-menu.show {
        top: 56px !important; }
      .navbar .language-dropdown .custom-dropdown-icon .dropdown-menu a {
        padding: 8px 7px;
        font-size: 13px;
        font-weight: 500;
        color: #3b3f5c; }

.navbar .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown).language-dropdown .custom-dropdown-icon .dropdown-menu a:hover {
  background-color: transparent;
  color: #4361ee; }

.navbar .language-dropdown .custom-dropdown-icon .dropdown-menu img {
  width: 17px;
  height: 17px;
  margin-right: 7px;
  vertical-align: sub; }

.navbar .navbar-item .nav-item.dropdown.message-dropdown {
  margin-left: 20px; }
  .navbar .navbar-item .nav-item.dropdown.message-dropdown .nav-link {
    font-size: 20px;
    padding: 6px 0; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .nav-link:after {
      display: none; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .nav-link svg {
      color: #e0e6ed; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .nav-link span.badge {
      position: absolute;
      display: block;
      width: 5px;
      height: 5px;
      border-radius: 50%;
      padding: 0;
      font-size: 10px;
      color: #fff !important;
      background: #e2a03f;
      border: 1px solid #e2a03f;
      top: 15px;
      right: -3px; }
  .navbar .navbar-item .nav-item.dropdown.message-dropdown.double-digit .nav-link span.badge {
    top: 11px;
    right: 1px;
    width: 22px;
    height: 22px;
    padding: 3px 3px 0px;
    font-size: 9px; }
  .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu {
    min-width: 13rem;
    right: -15px;
    left: auto;
    padding: 10px !important;
    top: 68px !important; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu.show {
      top: 60px !important; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .dropdown-item {
      padding: 8px 7px;
      border: 1px solid #fff; }
      .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .dropdown-item.active, .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .dropdown-item:active {
        background-color: transparent; }
      .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .dropdown-item:not(:last-child) {
        border-bottom: 1px solid #e0e6ed; }
      .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .dropdown-item:focus, .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .dropdown-item:hover {
        background-color: transparent; }
      .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .dropdown-item:first-child {
        padding-top: 8px; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu:after {
      right: 17px; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .dropdown-item:last-child {
      padding-bottom: 8px;
      cursor: pointer; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .media {
      margin: 0; }
      .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .media .avatar {
        position: relative;
        display: inline-block;
        width: 39px;
        height: 39px;
        font-size: 14px;
        margin-right: 11px;
        font-weight: 500; }
        .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .media .avatar .avatar-title {
          display: flex;
          align-items: center;
          justify-content: center;
          width: 100%;
          height: 100%;
          background-color: #304aca;
          color: #fff;
          font-weight: 600; }
      .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .media img {
        width: 40px;
        height: 40px;
        margin-right: 11px; }
      .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .media .media-body h5.usr-name {
        font-size: 15px;
        margin-bottom: 0px;
        color: #0e1726;
        font-weight: 500; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .dropdown-item:hover .media-body h5.usr-name {
      color: #445ede; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .media .media-body {
      align-self: center; }
      .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .media .media-body p.msg-title {
        font-size: 10px;
        font-weight: 700;
        color: #888ea8;
        margin-bottom: 0;
        letter-spacing: 0; }

.navbar .navbar-item .nav-item.dropdown.notification-dropdown {
  margin-left: 20px; }
  .navbar .navbar-item .nav-item.dropdown.notification-dropdown .nav-link {
    font-size: 21px;
    padding: 6px 0; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .nav-link:after {
      display: none; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .nav-link svg {
      color: #e0e6ed; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .nav-link span.badge {
      position: absolute;
      top: 15px;
      right: -3px;
      width: 5px;
      height: 5px;
      border-radius: 50%;
      padding: 3px 0px 0px;
      font-size: 10px;
      color: #fff !important;
      background: #25d5e4;
      display: block;
      border: 1px solid #25d5e4; }
  .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu {
    min-width: 15rem;
    right: -5px;
    left: auto;
    top: 68px !important;
    padding: 10px; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu.show {
      top: 60px !important; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .dropdown-item {
      padding: 0.625rem 1rem;
      cursor: pointer; }
      .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .dropdown-item:focus, .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .dropdown-item:hover {
        background-color: transparent; }
      .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .dropdown-item:not(:last-child) {
        border-bottom: 1px solid #ebedf2; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .media {
      margin: 0; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu svg {
      width: 23px;
      height: 23px;
      font-weight: 600;
      color: #e2a03f;
      fill: rgba(226, 160, 63, 0.270588);
      margin-right: 9px;
      align-self: center; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .media.file-upload svg {
      color: #e7515a;
      fill: rgba(231, 81, 90, 0.239216); }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .media.server-log svg {
      color: #009688;
      fill: rgba(0, 150, 136, 0.368627); }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .media-body {
      display: flex;
      justify-content: space-between; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .data-info {
      display: inline-block;
      white-space: normal; }
      .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .data-info h6 {
        margin-bottom: 0;
        font-weight: 600;
        font-size: 14px;
        margin-right: 8px; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .dropdown-item:hover .data-info h6 {
      color: #4361ee; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .data-info p {
      margin-bottom: 0;
      font-size: 13px;
      font-weight: 600;
      color: #888ea8; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .icon-status {
      display: inline-block;
      white-space: normal; }
      .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .icon-status svg {
        margin: 0; }
        .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .icon-status svg.feather-x {
          color: #bfc9d4;
          width: 19px;
          height: 19px;
          cursor: pointer; }
          .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .icon-status svg.feather-x:hover {
            color: #e7515a; }
        .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .icon-status svg.feather-check {
          color: #fff;
          background: #0d9a5d;
          border-radius: 50%;
          padding: 3px;
          width: 22px;
          height: 22px; }

.navbar .navbar-item.search-ul {
  margin-left: auto;
  margin-right: 15px; }

.navbar .navbar-item .nav-item.search-animated {
  position: relative;
  margin-left: 20px; }
  .navbar .navbar-item .nav-item.search-animated svg {
    display: none; }

.navbar .navbar-item .nav-item form.form-inline input.search-form-control {
  width: 100%;
  font-size: 12px;
  border: none;
  border-radius: 8px;
  color: #bfc9d4;
  letter-spacing: 1px;
  padding: 0px 4px 0px 20px;
  height: 36px;
  font-weight: 600; }
  .navbar .navbar-item .nav-item form.form-inline input.search-form-control:focus {
    box-shadow: 0 0.1px 0.4px rgba(0, 0, 0, 0), 0 0.1px 1.1px rgba(0, 0, 0, 0), 0 0.3px 2px rgba(0, 0, 0, 0), 0 0.4px 3.6px rgba(0, 0, 0, 0), 0 0.8px 6.7px rgba(0, 0, 0, 0.023), 0 2px 16px rgba(0, 0, 0, 0.14); }

.navbar .navbar-item .nav-item .form-inline.search .search-form-control {
  border: 1px solid #304aca;
  width: 100%;
  width: 425px;
  height: 50px;
  background: #304aca; }

.navbar .navbar-item .nav-item form.form-inline input.search-form-control::-webkit-input-placeholder, .navbar .navbar-item .nav-item form.form-inline input.search-form-control::-ms-input-placeholder, .navbar .navbar-item .nav-item form.form-inline input.search-form-control::-moz-placeholder {
  color: #bfc9d4;
  letter-spacing: 1px;
  font-size: 12px; }

.navbar .navbar-item .nav-item form.form-inline input.search-form-control:focus::-webkit-input-placeholder, .navbar .navbar-item .nav-item form.form-inline input.search-form-control:focus::-ms-input-placeholder, .navbar .navbar-item .nav-item form.form-inline input.search-form-control:focus::-moz-placeholder {
  color: #888ea8; }

/*   apps   */
/*   apps Dropdown  */
/*   Language   */
/*   Language Dropdown  */
/*Message Dropdown*/
/*Notification Dropdown*/
/* Search */
.search-overlay {
  display: none;
  position: fixed;
  width: 100vw;
  height: 100vh;
  background: transparent !important;
  z-index: 814 !important;
  opacity: 0;
  transition: all 0.5s ease-in-out; }
  .search-overlay.show {
    display: block;
    opacity: .1; }

/* User Profile Dropdown*/
.navbar .navbar-item .nav-item.user-profile-dropdown {
  margin-left: 20px;
  margin-right: 16px; }
  .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section {
    padding: 16px 15px;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    margin-right: -12px;
    margin-left: -12px;
    background: #8989ba;
    margin-top: -1px;
    background-image: linear-gradient(to top, #a7a6cb 0%, #8989ba 52%, #8989ba 100%); }
    .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media {
      margin: 0; }
      .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: none; }
      .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media .media-body {
        align-self: center; }
        .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media .media-body h5 {
          font-size: 14px;
          font-weight: 500;
          margin-bottom: 0;
          color: #fafafa; }
        .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media .media-body p {
          font-size: 11px;
          font-weight: 500;
          margin-bottom: 0;
          color: #e0e6ed; }
  .navbar .navbar-item .nav-item.user-profile-dropdown .nav-link.user {
    padding: 6px 0;
    font-size: 25px; }

.navbar .navbar-item .nav-item.dropdown.user-profile-dropdown .nav-link:after {
  display: none; }

.navbar .navbar-item .nav-item.user-profile-dropdown .nav-link svg {
  color: #e0e6ed; }

.navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu {
  z-index: 9999;
  max-width: 13rem;
  padding: 0 11px;
  /* top: 60px; */
  left: -140px;
  top: 68px !important; }
  .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu.show {
    top: 60px !important; }
  .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item {
    padding: 0; }
    .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item:hover {
      background: transparent; }
    .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item a {
      display: block;
      color: #3b3f5c;
      font-size: 13px;
      font-weight: 700;
      padding: 9px 14px; }
    .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item.active, .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item:active {
      background-color: transparent; }
    .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item:not(:last-child) {
      border-bottom: 1px solid #ebedf2; }
    .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item svg {
      width: 17px;
      margin-right: 7px;
      height: 17px;
      color: #56478e;
      fill: rgba(86, 71, 142, 0.34); }

/* 
===============
    Sidebar
===============
*/
.sidebar-wrapper {
  width: 255px;
  position: fixed;
  z-index: 1030;
  transition: .550s;
  top: 80px;
  height: 100vh;
  touch-action: none;
  user-select: none;
  -webkit-user-drag: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  -webkit-box-shadow: 4px 0 6px 0 rgba(85, 85, 85, 0.08), 1px 0 20px 0 rgba(0, 0, 0, 0.07), 1px 0 11px 0px rgba(0, 0, 0, 0.07);
  -moz-box-shadow: 4px 0 6px 0 rgba(85, 85, 85, 0.08), 1px 0 20px 0 rgba(0, 0, 0, 0.07), 1px 0 11px 0px rgba(0, 0, 0, 0.07);
  box-shadow: 4px 0 6px 0 rgba(85, 85, 85, 0.08), 1px 0 20px 0 rgba(0, 0, 0, 0.07), 1px 0 11px 0px rgba(0, 0, 0, 0.07);
  box-shadow: 0 0 40px 0 rgba(94, 92, 154, 0.06);
  border-right: 1px solid #e0e6ed; }

.sidebar-theme {
  background: #fff; }

#sidebar .theme-brand .toggle-sidebar {
  align-self: center; }
  #sidebar .theme-brand .toggle-sidebar svg {
    width: 18px;
    height: 18px;
    color: #fafafa;
    transition: 500ms; }

#sidebar * {
  overflow: hidden;
  white-space: nowrap; }

.sidebar-wrapper .profile-info {
  position: relative;
  padding-bottom: 0;
  background: #fafafa; }
  .sidebar-wrapper .profile-info * {
    transition: .600s; }
  .sidebar-wrapper .profile-info figure {
    width: 100%;
    height: 82px;
    background: url("../img/01.jpg") center center/cover no-repeat;
    margin-bottom: 0; }
  .sidebar-wrapper .profile-info .user-info {
    text-align: center;
    padding: 50px 0 0 0;
    height: 105px; }
    .sidebar-wrapper .profile-info .user-info img {
      position: absolute;
      top: 34px;
      border-radius: 50%;
      border: 6px solid rgba(235, 237, 242, 0.611765);
      border: 6px solid rgba(68, 94, 222, 0.24);
      left: 0;
      right: 0;
      height: 90px;
      width: 90px;
      margin-right: auto;
      margin-left: auto; }
    .sidebar-wrapper .profile-info .user-info h6 {
      font-weight: 700;
      font-size: 16px;
      letter-spacing: 0px;
      margin-top: 0;
      margin-bottom: 0;
      opacity: 1; }
    .sidebar-wrapper .profile-info .user-info p {
      font-size: 13px;
      font-weight: 600;
      letter-spacing: 0;
      opacity: 1;
      color: #888ea8; }

#sidebar .theme-brand li.theme-logo {
  align-self: center; }
  #sidebar .theme-brand li.theme-logo img {
    width: 40px;
    height: 40px; }

#sidebar .theme-brand li.theme-text a {
  font-size: 25px !important;
  color: #e0e6ed !important;
  line-height: 2.75rem;
  padding: 0.39rem 0.8rem;
  text-transform: initial;
  position: unset;
  font-weight: 600; }

#sidebar .navbar-brand .img-fluid {
  display: inline;
  width: 44px;
  height: auto;
  margin-left: 20px;
  margin-top: 5px; }

.shadow-bottom {
  display: block;
  position: absolute;
  z-index: 2;
  height: 33px;
  width: 100%;
  pointer-events: none;
  margin-top: -13px;
  left: -4px;
  -webkit-filter: blur(5px);
  filter: blur(7px);
  background: -webkit-linear-gradient(#fafafac4 41%, rgba(255, 255, 255, 0.14) 95%, rgba(255, 255, 255, 0));
  background: linear-gradient(#fafafac4 41%, rgba(255, 255, 255, 0.14) 95%, rgba(255, 255, 255, 0)); }

#sidebar ul.menu-categories {
  position: relative;
  padding: 20px 0 20px 0;
  margin: auto;
  width: 100%;
  overflow: auto; }
  #sidebar ul.menu-categories.ps {
    height: calc(100vh - 282px) !important; }
    #sidebar ul.menu-categories.ps .ps__rail-y:hover {
      background-color: transparent; }
    #sidebar ul.menu-categories.ps:hover > .ps__rail-y .ps__thumb-y {
      background-color: #888ea8; }

.sidebar-closed #sidebar:hover ul.menu-categories.ps {
  height: calc(100vh - 282px) !important; }

.sidebar-closed #sidebar ul.menu-categories.ps {
  height: calc(100vh - 130px) !important; }

#sidebar ul.menu-categories li > .dropdown-toggle[aria-expanded="true"] svg.feather-chevron-right {
  transform: rotate(90deg); }

#sidebar ul.menu-categories li.menu:first-child ul.submenu > li a {
  justify-content: flex-start; }
  #sidebar ul.menu-categories li.menu:first-child ul.submenu > li a i {
    align-self: center;
    margin-right: 12px;
    font-size: 19px;
    width: 21px; }

.sidebar-wrapper ul.menu-categories li.menu.menu-heading > .heading {
  cursor: pointer;
  font-size: 13px;
  font-weight: 700;
  color: #515365;
  padding: 20px 0 20px 12px;
  letter-spacing: 1px; }
  .sidebar-wrapper ul.menu-categories li.menu.menu-heading > .heading .feather-minus {
    display: none;
    vertical-align: sub;
    width: 12px;
    height: 12px;
    stroke-width: 4px;
    color: #304aca; }

#sidebar ul.menu-categories li.menu {
  transition: .600s;
  margin: 0px 15px 3px 15px; }
  #sidebar ul.menu-categories li.menu > .dropdown-toggle {
    display: flex;
    justify-content: space-between;
    cursor: pointer;
    font-size: 13px;
    color: #3b3f5c;
    padding: 14px 10px;
    font-weight: 600;
    transition: .600s;
    border-radius: 6px;
    letter-spacing: 0; }
    #sidebar ul.menu-categories li.menu > .dropdown-toggle > div {
      align-self: center; }
  #sidebar ul.menu-categories li.menu .dropdown-toggle:after {
    display: none; }
  #sidebar ul.menu-categories li.menu > .dropdown-toggle svg {
    color: #888ea8;
    margin-right: 18px;
    vertical-align: middle;
    width: 24px;
    height: 24px;
    stroke-width: 1px;
    fill: rgba(172, 176, 195, 0.25);
    transition: all .2s ease-in-out; }
  #sidebar ul.menu-categories li.menu > .dropdown-toggle[aria-expanded="true"] svg {
    color: #fff;
    fill: rgba(136, 142, 168, 0.278431);
    stroke-width: 2px; }
  #sidebar ul.menu-categories li.menu > .dropdown-toggle[aria-expanded="true"] span {
    color: #fff;
    border-radius: 12px;
    font-weight: 600;
    position: relative;
    transition: all .2s ease-in-out; }
  #sidebar ul.menu-categories li.menu:not(.active) > .dropdown-toggle[aria-expanded="true"] {
    background: #445ede; }
  #sidebar ul.menu-categories li.menu:not(.active) > .dropdown-toggle:not([aria-expanded="true"]):hover svg:not(.feather-chevron-right), #sidebar ul.menu-categories li.menu:not(.active) > .dropdown-toggle:hover svg:not(.feather-chevron-right) {
    margin-right: 22px; }
  #sidebar ul.menu-categories li.menu > .dropdown-toggle svg.feather-chevron-right {
    vertical-align: middle;
    margin-right: 0;
    width: 15px; }
  #sidebar ul.menu-categories li.menu > .dropdown-toggle[aria-expanded="true"] svg.flaticon-right-arrow, #sidebar ul.menu-categories li.menu > .dropdown-toggle[aria-expanded="true"] svg.flaticon-down-arrow {
    background-color: transparent; }
  #sidebar ul.menu-categories li.menu > a span:not(.badge) {
    vertical-align: middle; }

#sidebar ul.menu-categories ul.submenu > li a {
  position: relative;
  display: flex;
  justify-content: space-between;
  padding: 15px 12px 15px 48px;
  padding-left: 61px;
  font-size: 13px;
  font-weight: 500;
  color: #1b2e4b; }

#sidebar ul.menu-categories li.menu ul.submenu > li a:before {
  content: '';
  background-color: #d3d3d3;
  position: absolute;
  height: 3px;
  width: 3px;
  top: 22.5px;
  left: 50px;
  border-radius: 50%; }

#sidebar ul.menu-categories li.menu ul.submenu > li.active a:before {
  background-color: #445ede; }

#sidebar ul.menu-categories ul.submenu > li.active a {
  color: #304aca;
  font-size: 14px;
  font-weight: 700; }

#sidebar ul.menu-categories li.menu.active > .dropdown-toggle {
  background: #304aca; }
  #sidebar ul.menu-categories li.menu.active > .dropdown-toggle svg.feather-chevron-right {
    transform: rotate(90deg); }
  #sidebar ul.menu-categories li.menu.active > .dropdown-toggle[aria-expanded="false"] svg {
    color: #fff;
    stroke-width: 2px; }
  #sidebar ul.menu-categories li.menu.active > .dropdown-toggle[aria-expanded="false"] span {
    color: #fff;
    font-weight: 600; }

#sidebar ul.menu-categories ul.submenu > li a:hover {
  color: #304aca; }
  #sidebar ul.menu-categories ul.submenu > li a:hover:before {
    background-color: #304aca !important; }

#sidebar ul.menu-categories ul.submenu li > [aria-expanded="true"]:before {
  background-color: #304aca !important; }

#sidebar ul.menu-categories ul.submenu li > a[aria-expanded="true"] {
  color: #304aca;
  font-size: 14px; }

#sidebar ul.menu-categories ul.submenu > li ul.sub-submenu > li a {
  position: relative;
  padding: 10px 12px 10px 48px;
  padding-left: 13px;
  margin-left: 62px;
  font-size: 11px;
  color: #506690; }

#sidebar ul.menu-categories ul.submenu > li ul.sub-submenu > li.active a {
  color: #304aca; }

#sidebar ul.menu-categories ul.submenu > li ul.sub-submenu > li a:hover {
  color: #304aca; }
  #sidebar ul.menu-categories ul.submenu > li ul.sub-submenu > li a:hover:before {
    background-color: #304aca; }

#sidebar ul.menu-categories ul.submenu > li ul.sub-submenu > li a:before {
  content: '';
  background-color: #515365;
  position: absolute;
  top: 15px !important;
  border-radius: 50%;
  left: 0; }

#sidebar ul.menu-categories ul.submenu > li ul.sub-submenu > li.active a:before {
  background-color: #304aca; }

.sidebar-closed > .sidebar-wrapper {
  width: 54px; }

.sidebar-closed > #content {
  margin-left: 54px; }

.sidebar-closed > .sidebar-wrapper .profile-info {
  position: relative; }
  .sidebar-closed > .sidebar-wrapper .profile-info figure {
    height: 0;
    opacity: 0; }
  .sidebar-closed > .sidebar-wrapper .profile-info .user-info {
    text-align: center;
    padding: 50px 0 0 0;
    height: 50px; }
    .sidebar-closed > .sidebar-wrapper .profile-info .user-info img {
      top: 10px;
      border: 3px solid rgba(68, 94, 222, 0.24);
      width: 36px;
      height: 36px; }
    .sidebar-closed > .sidebar-wrapper .profile-info .user-info h6, .sidebar-closed > .sidebar-wrapper .profile-info .user-info p {
      opacity: 0; }

.sidebar-closed #sidebar ul.menu-categories li.menu {
  margin: 0px 8px; }

.sidebar-closed .sidebar-wrapper ul.menu-categories li.menu.menu-heading > .heading {
  padding: 20px 9px 20px 13px; }
  .sidebar-closed .sidebar-wrapper ul.menu-categories li.menu.menu-heading > .heading .feather-minus {
    display: inline-block; }

.sidebar-closed > .sidebar-wrapper ul.menu-categories li.menu.menu-heading > .heading span {
  display: none; }

.sidebar-closed #sidebar ul.menu-categories li.menu > .dropdown-toggle {
  padding: 11px 7px;
  transition: .600s;
  position: relative; }
  .sidebar-closed #sidebar ul.menu-categories li.menu > .dropdown-toggle svg.feather-chevron-right {
    display: none; }

.sidebar-closed #sidebar:hover ul.menu-categories li.menu {
  margin: 0px 15px 3px 15px; }

.sidebar-closed > .sidebar-wrapper:hover {
  width: 255px; }
  .sidebar-closed > .sidebar-wrapper:hover .profile-info {
    position: relative; }
    .sidebar-closed > .sidebar-wrapper:hover .profile-info figure {
      height: 76px;
      opacity: 1; }
    .sidebar-closed > .sidebar-wrapper:hover .profile-info .user-info {
      padding: 50px 0 0 0;
      height: 105px; }
      .sidebar-closed > .sidebar-wrapper:hover .profile-info .user-info img {
        top: 34px;
        border: 6px solid rgba(68, 94, 222, 0.24);
        width: 90px;
        height: 90px; }
      .sidebar-closed > .sidebar-wrapper:hover .profile-info .user-info h6, .sidebar-closed > .sidebar-wrapper:hover .profile-info .user-info p {
        opacity: 1; }

.sidebar-closed .sidebar-wrapper:hover #sidebar ul.menu-categories {
  padding: 20px 0 20px 0; }

.sidebar-closed .sidebar-wrapper:hover ul.menu-categories li.menu.menu-heading > .heading .feather-minus {
  display: none; }

.sidebar-closed .sidebar-wrapper:hover #sidebar ul.menu-categories li.menu > .dropdown-toggle[aria-expanded="true"]:before {
  display: none; }

.sidebar-closed .sidebar-wrapper:hover #sidebar ul.menu-categories li.menu > .dropdown-toggle svg.feather-chevron-right {
  display: inline-block; }

.sidebar-closed .sidebar-wrapper:hover #sidebar ul.menu-categories li.menu > .dropdown-toggle[aria-expanded="true"] svg {
  padding: 0;
  background: transparent;
  border-radius: 0;
  border: none; }

.sidebar-closed > .sidebar-wrapper:hover ul.menu-categories li.menu.menu-heading > .heading {
  padding: 20px 0 20px 20px; }
  .sidebar-closed > .sidebar-wrapper:hover ul.menu-categories li.menu.menu-heading > .heading span {
    display: inline-block; }

.sidebar-closed > .sidebar-wrapper:hover #sidebar ul.menu-categories li.menu > .dropdown-toggle {
  padding: 14px 10px;
  transition: .600s; }

.overlay {
  display: none;
  position: fixed;
  width: 100vw;
  height: 100vh;
  background: rgba(0, 0, 0, 0.4);
  z-index: 1035 !important;
  opacity: 0;
  transition: all 0.5s ease-in-out;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  touch-action: pan-y;
  user-select: none;
  -webkit-user-drag: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

.animated {
  -webkit-animation-duration: 0.6s;
  animation-duration: 0.6s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both; }

@-webkit-keyframes e-fadeInUp {
  0% {
    opacity: 0;
    margin-top: 10px; }
  100% {
    opacity: 1;
    margin-top: 0; } }

@keyframes e-fadeInUp {
  0% {
    opacity: 0;
    margin-top: 10px; }
  100% {
    opacity: 1;
    margin-top: 0; } }

.fadeInUp {
  -webkit-animation-name: e-fadeInUp;
  animation-name: e-fadeInUp; }

/*  
    ======================
        Footer-wrapper
    ======================
*/
.footer-wrapper {
  padding: 10px 20px 10px 20px;
  display: inline-block;
  background: transparent;
  font-weight: 600;
  font-size: 12px;
  width: 100%;
  border-top-left-radius: 6px;
  display: flex;
  justify-content: space-between; }

.main-container.sidebar-closed .footer-wrapper {
  border-radius: 0; }

.footer-wrapper .footer-section p {
  margin-bottom: 0;
  color: #515365;
  font-size: 13px;
  letter-spacing: 1px; }
  .footer-wrapper .footer-section p a {
    color: #515365; }

.footer-wrapper .footer-section svg {
  color: #e7515a;
  fill: rgba(231, 81, 90, 0.419608);
  width: 15px;
  height: 15px;
  vertical-align: text-top; }

/*  
    ======================
        MEDIA QUERIES
    ======================
*/
@media (max-width: 991px) {
  .header-container {
    padding-right: 0;
    padding-left: 0; }
  /*
      =============
          NavBar
      =============
  */
  .main-container.sidebar-closed #content {
    margin-left: 0; }
  .navbar .navbar-item .nav-item.search-animated {
    margin-left: 0; }
  .navbar .language-dropdown .custom-dropdown-icon {
    margin-right: 0; }
  .navbar .navbar-item .nav-item .form-inline.search .search-form-control {
    width: 189px !important; }
  /*
      =============
          Sidebar
      =============
  */
  #content {
    margin-left: 0; }
  #sidebar .theme-brand {
    border-radius: 0; }
  .sidebar-closed #sidebar .theme-brand {
    padding: 0.9px 12px 0.9px 24px; }
  .main-container:not(.sbar-open) .sidebar-wrapper, body.alt-menu .sidebar-closed > .sidebar-wrapper {
    width: 0;
    left: -52px; }
  .main-container {
    padding: 0; }
  #sidebar ul.menu-categories.ps {
    height: calc(100vh - 218px) !important; }
  .sidebar-wrapper {
    position: fixed;
    top: 0;
    bottom: 0;
    z-index: 9999;
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    -webkit-transform: translate3d(0, 0, 0);
    border-radius: 0; }
  #sidebar {
    height: 100vh !important;
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    -webkit-transform: translate3d(0, 0, 0); }
  /* display .overlay when it has the .active class */
  .overlay.show {
    display: block;
    opacity: .7; }
  .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu {
    right: -84px;
    padding: 24px 0; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu:after {
      right: 80px; }
  .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu {
    right: -40px; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu:after {
      right: 42px; }
  .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu {
    right: 4px; }
    .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu::after {
      right: 3px; } }

@media (max-width: 1199px) {
  .navbar .navbar-item .nav-item .form-inline.search .search-form-control {
    width: 220px; } }

@media (min-width: 992px) {
  .sidebar-closed #sidebar .theme-brand li.theme-text a, .md-visible {
    display: none; }
  .header-container .expand-header .navbar-nav .theme-text {
    opacity: 0;
    width: 0;
    display: none; }
  .header-container .expand-header .navbar-nav.theme-brand {
    width: 54px; }
    .header-container .expand-header .navbar-nav.theme-brand .theme-logo {
      opacity: 0;
      width: 0;
      display: none; } }

@media (max-width: 991px) {
  .sidebar-wrapper {
    border: none;
    box-shadow: none; }
  .md-hidden {
    display: none; }
  .header-container .navbar-nav .theme-text {
    display: none; }
  .header-container .navbar-nav.theme-brand {
    width: 110px; } }

@media (max-width: 767px) {
  .navbar .navbar-item.search-ul {
    margin: 0 0 0 auto; }
  .navbar .navbar-item .nav-item .form-inline.search {
    opacity: 0;
    transition: opacity 200ms, top 200ms;
    top: -25px; }
    .navbar .navbar-item .nav-item .form-inline.search .search-form-control {
      opacity: 0;
      transition: opacity 200ms, top 200ms; }
    .navbar .navbar-item .nav-item .form-inline.search.input-focused {
      position: absolute;
      bottom: 0;
      top: 0;
      background: #445ede;
      height: 100%;
      width: 100%;
      left: 0;
      right: 0;
      z-index: 32;
      margin-top: 0px !important;
      display: flex;
      opacity: 1;
      transition: opacity 200ms, top 200ms; }
      .navbar .navbar-item .nav-item .form-inline.search.input-focused .search-form-control {
        opacity: 1;
        transition: opacity 200ms, top 200ms; }
  .navbar .navbar-item .nav-item.search-animated {
    position: initial;
    margin-right: 10px; }
    .navbar .navbar-item .nav-item.search-animated svg {
      display: block;
      margin: 0;
      cursor: pointer;
      color: #e0e6ed;
      position: initial;
      width: 24px;
      height: 24px;
      transition: top 200ms; }
    .navbar .navbar-item .nav-item.search-animated.show-search svg {
      margin: 0;
      position: absolute;
      top: 29px;
      left: 16px;
      width: 22px;
      height: 22px;
      color: #ebedf2;
      z-index: 40;
      transition: top 200ms; }
  .navbar .navbar-item .nav-item .form-inline.search.input-focused .search-bar {
    width: 100%; }
  .navbar .navbar-item .nav-item .form-inline.search.input-focused .search-form-control {
    background: transparent;
    display: block;
    padding-left: 50px;
    padding-right: 12px;
    border: none;
    width: 100% !important;
    box-shadow: none; }
  .navbar .navbar-item .nav-item .form-inline.search .search-form-control {
    border: none;
    width: 100%;
    display: none; } }

@media (max-width: 575px) {
  .navbar .navbar-item .nav-item.dropdown.message-dropdown, .navbar .navbar-item .nav-item.dropdown.notification-dropdown {
    margin-left: 15px; }
  .navbar .navbar-item .nav-item.user-profile-dropdown {
    margin-left: 15px; }
  .navbar .language-dropdown .custom-dropdown-icon a.dropdown-toggle {
    min-width: 35px;
    padding: 8px 8px 8px 8px; }
  .navbar .language-dropdown .custom-dropdown-icon .dropdown-menu {
    top: 50px !important;
    right: -113px; }
  .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu {
    right: -35px; }
  .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu {
    right: -74px; }
  .navbar .language-dropdown .custom-dropdown-icon a.dropdown-toggle img {
    margin-right: 0;
    display: block; }
  .navbar .language-dropdown .custom-dropdown-icon a.dropdown-toggle span, .navbar .language-dropdown .custom-dropdown-icon a.dropdown-toggle svg {
    display: none; }
  .footer-wrapper .footer-section.f-section-2 {
    display: none; } }

</style>
<style>
/*
	===============================
			@Import	Function
	===============================
*/
/*
	===============================
			@Import	Mixins
	===============================
*/
/*----------Theme checkbox---------*/
.new-control {
  position: relative;
  display: -ms-inline-flexbox;
  display: inline-flex;
  padding-left: 1.5rem;
  margin-right: 1rem;
  font-weight: 100;
  font-size: 14px; }

.new-control-input {
  position: absolute;
  z-index: -1;
  opacity: 0; }

.new-control.new-checkbox {
  cursor: pointer; }
  .new-control.new-checkbox .new-control-indicator {
    position: absolute;
    top: 2px;
    left: 0;
    display: block;
    width: 17px;
    height: 17px;
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: #e0e6ed;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%;
    border-radius: 4px; }
  .new-control.new-checkbox > input:checked ~ span.new-control-indicator {
    background: #888ea8; }
    .new-control.new-checkbox > input:checked ~ span.new-control-indicator:after {
      display: block; }
  .new-control.new-checkbox span.new-control-indicator:after {
    border: solid #fff;
    top: 50%;
    left: 50%;
    margin-left: -2px;
    margin-top: -5px;
    width: 4px;
    height: 8px;
    border-width: 0 2px 2px 0 !important;
    transform: rotate(45deg);
    content: '';
    position: absolute;
    display: none;
    margin-left: -2px;
    margin-top: -5px;
    width: 4px;
    height: 8px;
    height: 8px; }

/*rounded checkbox*/
.new-checkbox-rounded span.new-control-indicator {
  border-radius: 50% !important; }

/*  line through colors   */
.new-control.new-checkbox.new-checkbox-text > input:checked ~ span.new-chk-content, .new-control.new-checkbox.new-checkbox-text.checkbox-outline-default > input:checked ~ span.new-chk-content {
  color: #888ea8; }

.new-control.new-checkbox.new-checkbox-text.checkbox-primary > input:checked ~ span.new-chk-content, .new-control.new-checkbox.new-checkbox-text.checkbox-outline-primary > input:checked ~ span.new-chk-content {
  color: #4361ee; }

.new-control.new-checkbox.new-checkbox-text.checkbox-success > input:checked ~ span.new-chk-content, .new-control.new-checkbox.new-checkbox-text.checkbox-outline-success > input:checked ~ span.new-chk-content {
  color: #1abc9c; }

.new-control.new-checkbox.new-checkbox-text.checkbox-info > input:checked ~ span.new-chk-content, .new-control.new-checkbox.new-checkbox-text.checkbox-outline-info > input:checked ~ span.new-chk-content {
  color: #2196f3; }

.new-control.new-checkbox.new-checkbox-text.checkbox-warning > input:checked ~ span.new-chk-content, .new-control.new-checkbox.new-checkbox-text.checkbox-outline-warning > input:checked ~ span.new-chk-content {
  color: #e2a03f; }

.new-control.new-checkbox.new-checkbox-text.checkbox-danger > input:checked ~ span.new-chk-content, .new-control.new-checkbox.new-checkbox-text.checkbox-outline-danger > input:checked ~ span.new-chk-content {
  color: #e7515a; }

.new-control.new-checkbox.new-checkbox-text.checkbox-secondary > input:checked ~ span.new-chk-content, .new-control.new-checkbox.new-checkbox-text.checkbox-outline-secondary > input:checked ~ span.new-chk-content {
  color: #805dca; }

.new-control.new-checkbox.new-checkbox-text.checkbox-dark > input:checked ~ span.new-chk-content, .new-control.new-checkbox.new-checkbox-text.checkbox-outline-dark > input:checked ~ span.new-chk-content {
  color: #3b3f5c; }

.new-control.new-checkbox.checkbox-primary > input:checked ~ span.new-control-indicator {
  background: #4361ee; }

.new-control.new-checkbox.checkbox-success > input:checked ~ span.new-control-indicator {
  background: #1abc9c; }

.new-control.new-checkbox.checkbox-info > input:checked ~ span.new-control-indicator {
  background: #2196f3; }

.new-control.new-checkbox.checkbox-warning > input:checked ~ span.new-control-indicator {
  background: #e2a03f; }

.new-control.new-checkbox.checkbox-danger > input:checked ~ span.new-control-indicator {
  background: #e7515a; }

.new-control.new-checkbox.checkbox-secondary > input:checked ~ span.new-control-indicator {
  background: #805dca; }

.new-control.new-checkbox.checkbox-dark > input:checked ~ span.new-control-indicator {
  background: #3b3f5c; }

.new-control.new-checkbox[class*="checkbox-outline-"] > input:checked ~ span.new-control-indicator {
  background-color: transparent; }

.new-control.new-checkbox.checkbox-outline-default > input:checked ~ span.new-control-indicator {
  border: 2px solid #888ea8; }

.new-control.new-checkbox.checkbox-outline-primary > input:checked ~ span.new-control-indicator {
  border: 2px solid #4361ee; }

.new-control.new-checkbox.checkbox-outline-success > input:checked ~ span.new-control-indicator {
  border: 2px solid #1abc9c; }

.new-control.new-checkbox.checkbox-outline-info > input:checked ~ span.new-control-indicator {
  border: 2px solid #2196f3; }

.new-control.new-checkbox.checkbox-outline-warning > input:checked ~ span.new-control-indicator {
  border: 2px solid #e2a03f; }

.new-control.new-checkbox.checkbox-outline-danger > input:checked ~ span.new-control-indicator {
  border: 2px solid #e7515a; }

.new-control.new-checkbox.checkbox-outline-secondary > input:checked ~ span.new-control-indicator {
  border: 2px solid #805dca; }

.new-control.new-checkbox.checkbox-outline-dark > input:checked ~ span.new-control-indicator {
  border: 2px solid #3b3f5c; }

.new-control.new-checkbox.checkbox-outline-default > input:checked ~ span.new-control-indicator:after {
  border-color: #888ea8; }

.new-control.new-checkbox.checkbox-outline-primary > input:checked ~ span.new-control-indicator:after {
  border-color: #4361ee; }

.new-control.new-checkbox.checkbox-outline-success > input:checked ~ span.new-control-indicator:after {
  border-color: #1abc9c; }

.new-control.new-checkbox.checkbox-outline-info > input:checked ~ span.new-control-indicator:after {
  border-color: #2196f3; }

.new-control.new-checkbox.checkbox-outline-warning > input:checked ~ span.new-control-indicator:after {
  border-color: #e2a03f; }

.new-control.new-checkbox.checkbox-outline-danger > input:checked ~ span.new-control-indicator:after {
  border-color: #e7515a; }

.new-control.new-checkbox.checkbox-outline-secondary > input:checked ~ span.new-control-indicator:after {
  border-color: #805dca; }

.new-control.new-checkbox.checkbox-outline-dark > input:checked ~ span.new-control-indicator:after {
  border-color: #3b3f5c; }

.new-control.new-radio {
  cursor: pointer; }
  .new-control.new-radio .new-control-indicator {
    position: absolute;
    top: 2px;
    left: 0;
    display: block;
    width: 16px;
    height: 16px;
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: #e0e6ed;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%;
    border-radius: 50%; }
  .new-control.new-radio > input:checked ~ span.new-control-indicator {
    background: #888ea8; }
  .new-control.new-radio span.new-control-indicator:after {
    top: 50%;
    left: 50%;
    margin-left: -3px;
    margin-top: -3px;
    content: '';
    position: absolute;
    display: none;
    border-radius: 50%;
    height: 6px;
    width: 6px;
    background-color: #fff; }
  .new-control.new-radio.square-radio .new-control-indicator, .new-control.new-radio.square-radio span.new-control-indicator:after {
    border-radius: 0; }
  .new-control.new-radio.radio-primary > input:checked ~ span.new-control-indicator {
    background: #4361ee; }
  .new-control.new-radio.radio-success > input:checked ~ span.new-control-indicator {
    background: #1abc9c; }
  .new-control.new-radio.radio-info > input:checked ~ span.new-control-indicator {
    background: #2196f3; }
  .new-control.new-radio.radio-warning > input:checked ~ span.new-control-indicator {
    background: #e2a03f; }
  .new-control.new-radio.radio-danger > input:checked ~ span.new-control-indicator {
    background: #e7515a; }
  .new-control.new-radio.radio-secondary > input:checked ~ span.new-control-indicator {
    background: #805dca; }
  .new-control.new-radio.radio-dark > input:checked ~ span.new-control-indicator {
    background: #3b3f5c; }
  .new-control.new-radio[class*="radio-classic-"] > input:checked ~ span.new-control-indicator {
    background-color: transparent; }
  .new-control.new-radio.radio-classic-default > input:checked ~ span.new-control-indicator {
    border: 3px solid #888ea8; }
  .new-control.new-radio.radio-classic-primary > input:checked ~ span.new-control-indicator {
    border: 3px solid #4361ee; }
  .new-control.new-radio.radio-classic-success > input:checked ~ span.new-control-indicator {
    border: 3px solid #1abc9c; }
  .new-control.new-radio.radio-classic-info > input:checked ~ span.new-control-indicator {
    border: 3px solid #2196f3; }
  .new-control.new-radio.radio-classic-warning > input:checked ~ span.new-control-indicator {
    border: 3px solid #e2a03f; }
  .new-control.new-radio.radio-classic-danger > input:checked ~ span.new-control-indicator {
    border: 3px solid #e7515a; }
  .new-control.new-radio.radio-classic-secondary > input:checked ~ span.new-control-indicator {
    border: 3px solid #805dca; }
  .new-control.new-radio.radio-classic-dark > input:checked ~ span.new-control-indicator {
    border: 3px solid #3b3f5c; }
  .new-control.new-radio.radio-classic-default > input:checked ~ span.new-control-indicator:after {
    background-color: #888ea8; }
  .new-control.new-radio.radio-classic-primary > input:checked ~ span.new-control-indicator:after {
    background-color: #4361ee; }
  .new-control.new-radio.radio-classic-success > input:checked ~ span.new-control-indicator:after {
    background-color: #1abc9c; }
  .new-control.new-radio.radio-classic-info > input:checked ~ span.new-control-indicator:after {
    background-color: #2196f3; }
  .new-control.new-radio.radio-classic-warning > input:checked ~ span.new-control-indicator:after {
    background-color: #e2a03f; }
  .new-control.new-radio.radio-classic-danger > input:checked ~ span.new-control-indicator:after {
    background-color: #e7515a; }
  .new-control.new-radio.radio-classic-secondary > input:checked ~ span.new-control-indicator:after {
    background-color: #805dca; }
  .new-control.new-radio.radio-classic-dark > input:checked ~ span.new-control-indicator:after {
    background-color: #3b3f5c; }
  .new-control.new-radio.new-radio-text > input:checked ~ span.new-radio-content, .new-control.new-radio.new-radio-text.radio-classic-default > input:checked ~ span.new-radio-content {
    color: #888ea8; }
  .new-control.new-radio.new-radio-text.radio-primary > input:checked ~ span.new-radio-content, .new-control.new-radio.new-radio-text.radio-classic-primary > input:checked ~ span.new-radio-content {
    color: #4361ee; }
  .new-control.new-radio.new-radio-text.radio-success > input:checked ~ span.new-radio-content, .new-control.new-radio.new-radio-text.radio-classic-success > input:checked ~ span.new-radio-content {
    color: #1abc9c; }
  .new-control.new-radio.new-radio-text.radio-info > input:checked ~ span.new-radio-content, .new-control.new-radio.new-radio-text.radio-classic-info > input:checked ~ span.new-radio-content {
    color: #2196f3; }
  .new-control.new-radio.new-radio-text.radio-warning > input:checked ~ span.new-radio-content, .new-control.new-radio.new-radio-text.radio-classic-warning > input:checked ~ span.new-radio-content {
    color: #e2a03f; }
  .new-control.new-radio.new-radio-text.radio-danger > input:checked ~ span.new-radio-content, .new-control.new-radio.new-radio-text.radio-classic-danger > input:checked ~ span.new-radio-content {
    color: #e7515a; }
  .new-control.new-radio.new-radio-text.radio-secondary > input:checked ~ span.new-radio-content, .new-control.new-radio.new-radio-text.radio-classic-secondary > input:checked ~ span.new-radio-content {
    color: #805dca; }
  .new-control.new-radio.new-radio-text.radio-dark > input:checked ~ span.new-radio-content, .new-control.new-radio.new-radio-text.radio-classic-dark > input:checked ~ span.new-radio-content {
    color: #3b3f5c; }

/*  Color   */
/*   Outline checkbox   */
/*----------Theme Radio---------*/
/*square radio*/
/*  Color   */
/*   Outline Radio   */
/*  line through colors   */

</style>
<style>
  /*

Monokai Sublime style. Derived from Monokai by noformnocontent http://nn.mit-license.org/

*/

.hljs {
  display: block;
  overflow-x: auto;
  padding: 0.5em;
  background: #23241f;
}

.hljs,
.hljs-tag,
.hljs-subst {
  color: #f8f8f2;
}

.hljs-strong,
.hljs-emphasis {
  color: #a8a8a2;
}

.hljs-bullet,
.hljs-quote,
.hljs-number,
.hljs-regexp,
.hljs-literal,
.hljs-link {
  color: #ae81ff;
}

.hljs-code,
.hljs-title,
.hljs-section,
.hljs-selector-class {
  color: #a6e22e;
}

.hljs-strong {
  font-weight: bold;
}

.hljs-emphasis {
  font-style: italic;
}

.hljs-keyword,
.hljs-selector-tag,
.hljs-name,
.hljs-attr {
  color: #f92672;
}

.hljs-symbol,
.hljs-attribute {
  color: #66d9ef;
}

.hljs-params,
.hljs-class .hljs-title {
  color: #f8f8f2;
}

.hljs-string,
.hljs-type,
.hljs-built_in,
.hljs-builtin-name,
.hljs-selector-id,
.hljs-selector-attr,
.hljs-selector-pseudo,
.hljs-addition,
.hljs-variable,
.hljs-template-variable {
  color: #e6db74;
}

.hljs-comment,
.hljs-deletion,
.hljs-meta {
  color: #75715e;
}

</style>
<style>
  /*
	===============================
			@Import	Function
	===============================
*/
/*
	===============================
			@Import	Mixins
	===============================
*/
/*
 * Container style
 */
.ps {
  overflow: hidden !important;
  overflow-anchor: none;
  -ms-overflow-style: none;
  touch-action: auto;
  -ms-touch-action: auto; }

/*
 * Scrollbar rail styles
 */
.ps__rail-x {
  display: none;
  opacity: 0;
  transition: background-color .2s linear, opacity .2s linear;
  -webkit-transition: background-color .2s linear, opacity .2s linear;
  height: 10px;
  /* there must be 'bottom' or 'top' for ps__rail-x */
  bottom: 0px;
  /* please don't change 'position' */
  position: absolute; }

.ps__rail-y {
  display: none;
  opacity: 0;
  transition: background-color .2s linear, opacity .2s linear;
  -webkit-transition: background-color .2s linear, opacity .2s linear;
  width: 10px;
  /* there must be 'right' or 'left' for ps__rail-y */
  right: 0;
  /* please don't change 'position' */
  position: absolute; }

.ps--active-x > .ps__rail-x, .ps--active-y > .ps__rail-y {
  display: block;
  background-color: transparent; }

.ps:hover > .ps__rail-x, .ps:hover > .ps__rail-y {
  opacity: 0.6; }

.ps--focus > .ps__rail-x, .ps--focus > .ps__rail-y {
  opacity: 0.6; }

.ps--scrolling-x > .ps__rail-x, .ps--scrolling-y > .ps__rail-y {
  opacity: 0.6; }

.ps .ps__rail-x:hover, .ps .ps__rail-y:hover, .ps .ps__rail-x:focus, .ps .ps__rail-y:focus, .ps .ps__rail-x.ps--clicking, .ps .ps__rail-y.ps--clicking {
  background-color: #eee;
  opacity: 0.9; }

/*
 * Scrollbar thumb styles
 */
.ps__thumb-x {
  background-color: #d3d3d3;
  border-radius: 6px;
  transition: background-color .2s linear, height .2s ease-in-out;
  -webkit-transition: background-color .2s linear, height .2s ease-in-out;
  height: 4px;
  /* there must be 'bottom' for ps__thumb-x */
  bottom: 2px;
  /* please don't change 'position' */
  position: absolute; }

.ps__thumb-y {
  background-color: #d3d3d3;
  border-radius: 6px;
  transition: background-color .2s linear, width .2s ease-in-out;
  -webkit-transition: background-color .2s linear, width .2s ease-in-out;
  width: 4px;
  /* there must be 'right' for ps__thumb-y */
  right: 2px;
  /* please don't change 'position' */
  position: absolute; }

.ps__rail-x:hover > .ps__thumb-x, .ps__rail-x:focus > .ps__thumb-x, .ps__rail-x.ps--clicking .ps__thumb-x {
  background-color: #e3e4eb;
  height: 6px; }

.ps__rail-y:hover > .ps__thumb-y, .ps__rail-y:focus > .ps__thumb-y, .ps__rail-y.ps--clicking .ps__thumb-y {
  background-color: #e3e4eb;
  width: 6px; }

/* MS supports */
@supports (-ms-overflow-style: none) {
  .ps {
    overflow: auto !important; } }

@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
  .ps {
    overflow: auto !important; } }

</style>
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
    background-color: #888ea8
  }

  .modal-backdrop.show {
    opacity: .7
  }

  #addListModal .modal-dialog {
    max-width: 345px
  }

  #addListModal .modal-content {
    border: 0;
    box-shadow: 0 0 15px 1px rgba(113, 106, 202, 0.2)
  }

  #addListModal .compose-box h5 {
    font-weight: 700;
    font-size: 18px;
    color: #3b3f5c;
    text-align: center;
    margin-bottom: 38px
  }

  #addListModal .compose-box .list-title {
    display: flex
  }

  #addListModal .compose-box .list-title svg {
    align-self: center;
    font-size: 19px;
    margin-right: 14px;
    color: #4361ee;
    font-weight: 600
  }

  #addListModal .compose-box .list-title input {
    border: 0;
    padding: 10px 16px;
    -webkit-box-shadow: 2px 5px 17px 0 rgba(31, 45, 61, .1);
    box-shadow: 2px 5px 17px 0 rgba(31, 45, 61, .1)
  }

  #addListModal .compose-box .list-title input::-webkit-input-placeholder {
    color: #bfc9d4;
    font-weight: 600
  }

  #addListModal .compose-box .list-title input::-ms-input-placeholder {
    color: #bfc9d4;
    font-weight: 600
  }

  #addListModal .compose-box .list-title input::-moz-placeholder {
    color: #bfc9d4;
    font-weight: 600
  }

  #addListModal .modal-footer {
    justify-content: center;
    border: 0;
    padding: 23px 20px
  }

  #addListModal .modal-footer .btn[data-dismiss="modal"] {
    background-color: #fff;
    color: #4361ee;
    font-weight: 700;
    border: 1px solid #e0e6ed;
    padding: 10px 25px
  }

  #addListModal .modal-footer .edit-list {
    background-color: #009688;
    color: #fff;
    font-weight: 600;
    border: 1px solid #e0e6ed;
    padding: 10px 25px
  }

  #addListModal .modal-footer .btn.add-list {
    background-color: #4361ee;
    color: #fff;
    font-weight: 600;
    border: 1px solid #e0e6ed;
    padding: 10px 25px
  }

  #addTaskModal .compose-box h5 {
    font-weight: 700;
    font-size: 18px;
    color: #515365;
    text-align: center;
    margin-bottom: 38px
  }

  #addTaskModal .task-title {
    display: flex
  }

  #addTaskModal .modal-content .card {
    border: 1px solid #e0e6ed;
    border-radius: 6px;
    cursor: pointer;
    background-color: #fff
  }

  #addTaskModal .modal-content .card-header {
    padding: 0;
    padding: 0;
    border: 0;
    background: 0
  }

  #addTaskModal .modal-content .card-header>div {
    padding: 13px 21px;
    font-weight: 600;
    font-size: 16px;
    color: #4361ee
  }

  #addTaskModal .modal-content {
    border: 0;
    box-shadow: 0 0 15px 1px rgba(113, 106, 202, 0.2)
  }

  #addTaskModal .modal-content svg {
    align-self: center;
    font-size: 19px;
    margin-right: 14px;
    color: #4361ee;
    font-weight: 600
  }

  #addTaskModal .modal-content input {
    padding: 10px 16px
  }

  #addTaskModal .task-badge {
    display: flex
  }

  #addTaskModal .modal-content textarea {
    padding: 10px 16px
  }

  #addTaskModal .modal-footer {
    justify-content: center;
    border: 0;
    padding-top: 0
  }

  #addTaskModal .modal-footer .btn[data-dismiss="modal"] {
    background-color: #fff;
    color: #4361ee;
    font-weight: 700;
    border: 1px solid #e8e8e8;
    padding: 10px 25px
  }

  #addTaskModal .modal-footer [data-btnfn="addTask"] {
    background-color: #4361ee;
    color: #fff;
    font-weight: 600;
    border: 1px solid #4361ee;
    padding: 10px 25px
  }

  #addTaskModal .modal-footer [data-btnfn="editTask"] {
    background-color: #009688;
    color: #fff;
    font-weight: 600;
    border: 1px solid #e0e6ed;
    padding: 10px 25px
  }

  #deleteConformation .modal-content {
    border: 0;
    -webkit-box-shadow: 2px 5px 17px 0 rgba(31, 45, 61, .1);
    box-shadow: 2px 5px 17px 0 rgba(31, 45, 61, .1);
    padding: 30px
  }

  #deleteConformation .modal-content .modal-header {
    border: 0;
    padding: 0
  }

  #deleteConformation .modal-content .modal-header .icon {
    padding: 7px 9px;
    background: rgba(231, 81, 90, 0.37);
    text-align: center;
    margin-right: 8px;
    border-radius: 50%
  }

  #deleteConformation .modal-content .modal-header svg {
    width: 20px;
    color: #e7515a;
    fill: rgba(231, 81, 90, 0.37)
  }

  #deleteConformation .modal-content .modal-header .modal-title {
    color: #3b3f5c;
    font-size: 18px;
    font-weight: 700;
    align-self: center
  }

  #deleteConformation .modal-content .modal-body {
    padding: 28px 0
  }

  #deleteConformation .modal-content .modal-body p {
    color: #888ea8;
    font-size: 15px;
    font-weight: 600;
    margin-bottom: 0
  }

  #deleteConformation .modal-content .modal-footer {
    padding: 0;
    border: 0
  }

  #deleteConformation .modal-content .modal-footer [data-dismiss="modal"] {
    background-color: #fff;
    color: #e7515a;
    font-weight: 700;
    border: 1px solid #e8e8e8;
    padding: 10px 25px
  }

  #deleteConformation .modal-content .modal-footer [data-remove="task"] {
    color: #fff;
    font-weight: 600;
    padding: 10px 25px
  }

  .task-list-section {
    display: flex;
    overflow-x: auto;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    padding-bottom: 15px
  }

  .task-list-container {
    min-width: 309px;
    padding: 0 15px;
    width: 320px
  }

  .task-list-container:first-child {
    padding-left: 0
  }

  .task-list-container:last-child {
    padding-right: 0
  }

  .connect-sorting {
    padding: 15px;
    border-radius: 10px;
    border: 1px solid #e0e6ed;
    background: #e2e6ea
  }

  .connect-sorting .task-container-header {
    display: flex;
    justify-content: space-between;
    padding: 18px 5px
  }

  .connect-sorting .task-container-header .dropdown .dropdown-menu {
    padding: 11px
  }

  .connect-sorting .task-container-header .dropdown .dropdown-menu .dropdown-item {
    padding: 5px;
    font-size: 14px;
    font-weight: 700
  }

  .connect-sorting .task-container-header .dropdown .dropdown-menu .dropdown-item:hover {
    color: #4361ee
  }

  .connect-sorting .task-container-header .dropdown .dropdown-menu .dropdown-item.active,
  .connect-sorting .task-container-header .dropdown .dropdown-menu .dropdown-item:active {
    background-color: transparent
  }

  .connect-sorting .task-container-header h6 {
    font-size: 16px;
    font-weight: 700
  }

  .connect-sorting .add-s-task {
    transition: all .3s ease-out;
    -webkit-transition: all .3s ease-out;
    text-align: center
  }

  .connect-sorting .add-s-task:hover {
    -webkit-transform: translateY(-3px);
    transform: translateY(-3px)
  }

  .connect-sorting .add-s-task .addTask {
    display: block;
    color: #3b3f5c;
    font-size: 13px;
    font-weight: 700;
    text-align: center;
    display: inline-block;
    cursor: pointer
  }

  .connect-sorting .add-s-task .addTask:hover {
    color: #4361ee
  }

  .connect-sorting .add-s-task .addTask svg {
    width: 16px;
    height: 16px;
    vertical-align: text-top
  }

  .scrumboard .task-header {
    margin-bottom: 0;
    display: flex;
    justify-content: space-between;
    padding: 20px 20px 0 20px
  }

  .scrumboard .task-header h4 {
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 0
  }

  .scrumboard .task-header svg.feather-edit-2 {
    width: 18px;
    height: 18px;
    color: #888ea8;
    vertical-align: middle;
    fill: rgba(0, 23, 55, 0.08);
    cursor: pointer;
    padding: 0;
    margin-right: 5px
  }

  .scrumboard .task-header svg.feather-edit-2:hover {
    color: #4361ee;
    fill: rgba(27, 85, 226, 0.23921568627450981)
  }

  .scrumboard .task-header svg.feather-trash-2 {
    color: #e7515a;
    margin-right: 6px;
    vertical-align: middle;
    width: 18px;
    height: 18px;
    fill: rgba(231, 81, 90, 0.14);
    cursor: pointer
  }

  .scrumboard .task-header svg.feather-trash-2:hover {
    fill: rgba(231, 81, 90, 0.37)
  }

  .scrumboard .card {
    border: 0;
    border-radius: 4px;
    margin-bottom: 30px;
    box-shadow: rgb(145 158 171 / 24%) 0 0 2px 0, rgb(145 158 171 / 24%) 0 16px 32px -4px
  }

  .scrumboard .card .card-body {
    padding: 0
  }

  .scrumboard .card .card-body .task-body .task-bottom {
    display: flex;
    justify-content: space-between;
    padding: 12px 15px
  }

  .scrumboard .card .card-body .task-body .task-bottom div.tb-section-1 span {
    font-size: 13px;
    font-weight: 600;
    width: 17px;
    height: 17px
  }

  .scrumboard .card .card-body .task-body .task-bottom div.tb-section-1 span:hover {
    color: #4361ee;
    cursor: pointer
  }

  .scrumboard .card .card-body .task-body .task-bottom div.tb-section-1 span:hover svg {
    color: #4361ee;
    fill: rgba(27, 85, 226, 0.23921568627450981)
  }

  .scrumboard .card .card-body .task-body .task-bottom div.tb-section-1 svg {
    width: 18px;
    vertical-align: bottom
  }

  .scrumboard .card .card-body .task-body .task-bottom div.tb-section-1 svg:not(:last-child) {
    margin-right: 5px
  }

  .scrumboard .card .card-body .task-body .task-bottom div.tb-section-2 svg {
    width: 18px;
    cursor: pointer
  }

  .scrumboard .card .card-body .task-body .task-bottom div.tb-section-2 svg {
    color: #888ea8;
    margin-right: 6px;
    vertical-align: middle;
    width: 18px;
    height: 18px;
    fill: rgba(0, 23, 55, 0.08)
  }

  .scrumboard .card .card-body .task-body .task-bottom div.tb-section-2 svg.feather-edit-2 {
    width: 18px;
    height: 18px;
    color: #888ea8;
    vertical-align: middle;
    fill: rgba(0, 23, 55, 0.08);
    cursor: pointer;
    padding: 0
  }

  .scrumboard .card .card-body .task-body .task-bottom div.tb-section-2 svg.feather-edit-2:hover {
    color: #4361ee;
    fill: rgba(27, 85, 226, 0.23921568627450981)
  }

  .scrumboard .card .card-body .task-body .task-bottom div.tb-section-2 svg.feather-trash-2 {
    color: #e7515a;
    margin-right: 6px;
    vertical-align: middle;
    width: 18px;
    height: 18px;
    fill: rgba(231, 81, 90, 0.14)
  }

  .scrumboard .card .card-body .task-body .task-bottom div.tb-section-2 svg.feather-trash-2:hover {
    fill: rgba(231, 81, 90, 0.37)
  }

  .scrumboard .card .card-body .task-body .task-bottom div.tb-section-2 svg:not(:last-child) {
    margin-right: 5px
  }

  .scrumboard .card.img-task .card-body .task-content {
    padding: 10px 10px 0 10px
  }

  .scrumboard .card.img-task .card-body .task-content img {
    border-radius: 6px;
    height: 105px;
    width: 100%
  }

  .scrumboard .card.simple-title-task .card-body .task-header {
    margin-bottom: 0;
    padding: 20px
  }

  .scrumboard .card.simple-title-task .card-body .task-header div:nth-child(1) {
    width: 70%
  }

  .scrumboard .card.simple-title-task .card-body .task-header div:nth-child(2) {
    width: 30%;
    text-align: right
  }

  .scrumboard .card.simple-title-task .card-body .task-body .task-bottom {
    padding: 3px 15px 11px 15px
  }

  .scrumboard .card.task-text-progress .card-body .task-content {
    margin-top: 20px
  }

  .scrumboard .card.task-text-progress .card-body .task-content p {
    padding: 5px 20px 5px 20px
  }

  .scrumboard .card.task-text-progress .card-body .task-content>div {
    display: flex;
    padding: 5px 20px 5px 20px
  }

  .scrumboard .card.task-text-progress .card-body .task-content .progress {
    height: 9px;
    width: 100%;
    margin-right: 17px;
    margin-bottom: 0;
    align-self: center
  }

  .scrumboard .card.task-text-progress .card-body .task-content>div p.progress-count {
    padding: 0;
    margin-bottom: 0
  }

  .scrumboard .card.ui-sortable-helper {
    background-color: #4361ee
  }

  .scrumboard .card.ui-sortable-helper .task-header span {
    color: #fff
  }

  .scrumboard .card.ui-sortable-helper .task-header span svg {
    color: #fff
  }

  .scrumboard .card.ui-sortable-helper .task-header svg.feather-edit-2 {
    color: #fff
  }

  .scrumboard .card.ui-sortable-helper .task-header svg.feather-trash-2 {
    color: #fff
  }

  .scrumboard .card.ui-sortable-helper .task-header h4 {
    color: #fff
  }

  .scrumboard .card.ui-sortable-helper.task-text-progress .card-body .task-content p {
    color: #fff
  }

  .scrumboard .card.ui-sortable-helper.task-text-progress .card-body .task-content .progress .progress-bar {
    background-color: #2196f3 !important
  }

  .scrumboard .card.ui-sortable-helper .task-header svg.feather-user {
    color: #fff
  }

  .scrumboard .card.ui-sortable-helper .card-body .task-body .task-bottom div.tb-section-1 {
    color: #fff
  }

  .scrumboard .card.ui-sortable-helper .card-body .task-body .task-bottom div.tb-section-1 svg {
    color: #fff
  }

  .scrumboard .card.ui-sortable-helper .card-body .task-body .task-bottom div.tb-section-2 svg {
    color: #fff
  }

  .scrumboard .card.ui-sortable-helper .card-body .task-content .progress {
    box-shadow: none
  }

  .ui-state-highlight {
    position: relative;
    border-color: #4361ee;
    height: 141px;
    margin-bottom: 36px;
    border-radius: 15px;
    border: 1px dashed #4361ee;
    background-image: linear-gradient(45deg, rgba(27, 85, 226, 0.09) 25%, transparent 25%, transparent 50%, rgba(27, 85, 226, 0.09) 50%, rgba(27, 85, 226, 0.09) 75%, transparent 75%, transparent);
    background-size: 1rem 1rem;
    -webkit-animation: progress-bar-stripes 1s linear infinite;
    animation: progress-bar-stripes 1s linear infinite
  }

  .ui-state-highlight:before {
    content: 'Drop';
    position: absolute;
    left: 41%;
    font-size: 19px;
    color: #4361ee;
    top: 50%;
    margin-top: -16px;
    font-weight: 600
  }

  .connect-sorting-content {
    min-height: 60px
  }

  @keyframes progress-bar-stripes {
    0% {
      background-position: 1rem 0
    }

    100% {
      background-position: 0 0
    }
  }
</style>