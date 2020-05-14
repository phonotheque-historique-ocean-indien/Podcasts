<?php
$blocks = $this->getVar("blocks");
?>

<div class="all-podcasts-phoi">
    <nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
        <div class="container">
            <ul class="ariane">
                <li><a href="/">Accueil</a></li>
                <li class="is-active"><a href="#" aria-current="page">Podcasts</a></li>
            </ul>
        </div>
    </nav>

    <h1 class="page-title">Podcasts</h1>
    <div class="display-options level is-flex-desktop">
        <div class="level-left">
            <a href="/index.php/Contribuer/Pages/Form/template/article">
                <button class="button action-btn add-new is-uppercase has-text-centered">
	      <span class="icon">
	        <i class="mdi mdi-plus"></i>
	      </span>
                    &nbsp Nouveau
                </button>
            </a>
        </div>
        <div class="level-right">
            <p class="level-item">trier par &nbsp
                <em class="has-text-weight-semibold">le plus récent</em>
                <span class="icon red">
        <i class="fa fa-caret-down"></i>
      </span>
            </p>
            <div class="dropdown is-hoverable">
                <div class="dropdown-trigger">
                    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
          <span>
            <p class="level-item">présentation par &nbsp
              <em class="has-text-weight-semibold">vignettes</em>
          </span>
                        <span class="icon red">
            <i class="fa fa-caret-down"></i>
          </span>
                    </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                    <div class="dropdown-content">
                        <a href="./list" class="dropdown-item">
                            liste
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="columns">
        <?php print $blocks; ?>
    </div>
</div>
