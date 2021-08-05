<?php
include 'init.php';

use Models\Auth;

$page_title = "Home";

include 'layout/header.php';
?>
<main>
    <div class="hero">
        <div class="hero-items">
            <h1>Welcome to Multiverse</h1>
            <div class="h1-subtitle">A simple authentication system for scalable digital projects</div>
        </div>
    </div>
    <h2>A brief explanation</h2>
    <p>Over the past several years, I've worked on numerous functioning digital projects that have their own space on my site. For each of these projects, one of the first time-cosuming tasks was building a login/register ("authentication") system so that the applications could function independently and store data for specific users.</p>
    <p>By implementing Multiverse, each of these applications can rely on a singular authentication system, or can implement Multiverse to serve as as a backbone for an individual project.</p>
</main>
</body>

</html>