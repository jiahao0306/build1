<h2>Login / Register</h2>

<?php
echo $this->Form->create();
echo $this->Form->input('email');
echo $this->Form->input('password');
echo $this->Form->end('Login');
?>