<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <a class="navbar-brand" href="<?php echo URLROOT; ?>/posts"><?php echo SITENAME; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">

    <?php if(isset($_SESSION['user_id'])) : ; ?>  

        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>"><i class="fa fa-home"></i> Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/profiles"><i class="fa fa-user"></i> Profiles</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/profiles/searchProfile"><i class="fa fa-search"></i> Search</a>
        </li>

    <?php else : ; ?>
      
    <?php endif; ?>

    </ul>

       <ul class="navbar-nav ml-auto">

      <?php if(isset($_SESSION['user_id'])) : ; ?>   

          <?php if($_SESSION['status'] == 'Administrator') : ; ?>
                <li class="nav-item">
                     <a class="nav-link" href="<?php echo URLROOT; ?>/users/register"><i class="fa fa-user-plus"></i> Create New Moderator</a>
                </li>
          <?php endif; ?>

                <li class="nav-item">
                     <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout"><i class="fa fa-arrow-right"></i> Logout</a>
              </li>

      <?php else : ; ?>
              
              <li class="nav-item">
                     <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
              </li>

      <?php endif; ?>

       </ul>

  </div>
</nav>