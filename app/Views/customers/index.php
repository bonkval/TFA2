<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="page-intro"><div><div class="eyebrow">MySQL database records</div><h1><?= esc($heading) ?></h1></div><p>Customer records are retrieved through <code>CustomerModel::findAll()</code> and rendered with a <code>foreach</code> loop.</p></section>
<div class="table-wrap">
    <table>
        <thead><tr><th>Full name</th><th>Email</th><th>Phone</th></tr></thead>
        <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr><td><?= esc($customer['full_name']) ?></td><td><?= esc($customer['email']) ?></td><td><?= esc($customer['phone']) ?></td></tr>
        <?php endforeach; ?>
        <?php if ($customers === []): ?>
            <tr><td colspan="3">No customer records found.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
