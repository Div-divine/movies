<?php

unset($_SESSION['users']);
alert('Déconnection faite avec success', 'success');
header('Location: '. $router->generate('Login'));
die;