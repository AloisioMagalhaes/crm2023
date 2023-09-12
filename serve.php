<?php
set_time_limit(300);
const SIGTERM = 15;

// Create a child process
$options = [
    "bypass_shell" => true,
];
$pipes = [];
$pid = proc_open("php -S localhost:8000 -t src &", $pipes, $options);

// Get the process ID of the child process
$child_pid = (int) $pid;

// Send a SIGTERM signal to the process
posix_kill($child_pid, SIGTERM);

// Wait for the process to terminate
while (posix_kill($child_pid, 0)) {
    sleep(1);
}
// Send a SIGKILL signal to the process if it hasn't terminated yet
if (posix_kill($child_pid, 0)) {
    posix_kill($child_pid, SIGTERM);
}

// Check if the process was terminated correctly
if (posix_getpid() != $child_pid) {
    echo "The process was terminated correctly";
} else {
    echo "The process was not terminated correctly";
    // Handle the error
}

// Exit
exit();