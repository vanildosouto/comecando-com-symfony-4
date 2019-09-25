<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function __invoke()
    {
        return new Response('
<html>
    <body>
        <h1 class="title">Meus Jogos</h1>
        <ul>
            <li>Super Mario World - Novo</li>
            <li></li>
            <li></li>
        </ul>
    </body>
</html>
');
    }
}
