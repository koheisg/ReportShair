<header class="navbar">
  <div class="wrap">
    <h1 class="logo"><a href="/" title="ReportShair">ReportShair</a></h1>
    <nav class="nav">
<?php $var = False; if ($var): ?>
      <ul class="navlist pull">
        <li><a href="/reports/add" title="Create new report">Create Report</a></li>
        <li class="usernav">
          <a href="" title="Username">
            <img class="userimage" src="" width="36px" height="36px" alt="" />
            <span class="username">Username</span>
          </a>
          <ul>
            <li><a href="" title="Settings">Settings</a></li>
            <li><a href="" title="Logout">Logout</a></li>
          </ul>
        </li>
      </ul>
<?php else: ?>
    <ul class="navlist pull">
      <li><a href="<?=$fbLoginURL?>" title="Login with Facebook">Login</a></li>
    </ul>
<?php endif; ?>
    </nav>
  </div>
</header><!-- .header -->
