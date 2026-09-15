<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="page-intro"><div><div class="eyebrow">MySQL database records</div><h1><?= esc($heading) ?></h1></div><p>User records are retrieved through <code>UserModel::findAll()</code> and rendered with a <code>foreach</code> loop.</p></section>
<div class="table-wrap">
    <table>
        <thead><tr><th>Username</th><th>Full name</th><th>Created at</th></tr></thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr><td><?= esc($user['username']) ?></td><td><?= esc($user['full_name']) ?></td><td><?= esc($user['created_at']) ?></td></tr>
        <?php endforeach; ?>
        <?php if ($users === []): ?>
            <tr><td colspan="3">No user records found.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
