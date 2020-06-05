<nav id="home">
    <ul>
    <?php if ($page->isHomePage()): ?>
  <li class="logo"><a href="#header">DisasterTech</a></li>
  <li><a href="#about">About us</a></li>
  <li><a href="#projects">Projects</a></li>
  <li><a href="#join">Join the crew!</a></li>
  <li><a href="/blog">Blog</a></li>
<?php else: ?>
  <li class="logo"><a href="https://www.disaster-tech.org/#header">DisasterTech</a></li>
  <li><a href="https://www.disaster-tech.org/#about">About us</a></li>
  <li><a href="https://www.disaster-tech.org/#projects">Projects</a></li>
  <li><a href="https://www.disaster-tech.org/#join">Join the crew!</a></li>
  <li><a href="/blog">Blog</a></li>
<?php endif ?>
    </ul>
</nav>