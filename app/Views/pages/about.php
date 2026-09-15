<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="page-intro"><div><div class="eyebrow">About the project</div><h1><?= esc($heading) ?></h1></div><p>This activity demonstrates the first version of a POS system using CodeIgniter 4's MVC structure. The routes map URLs to controller methods, and the controllers pass page data to reusable views.</p></section>
<section class="card about-panel"><p>Customer and user records are stored in MySQL and retrieved through dedicated CodeIgniter models. This keeps database access separate from the controllers and views.</p></section>
<?= $this->endSection() ?>
