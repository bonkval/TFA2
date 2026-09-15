<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="page-intro"><div><div class="eyebrow">Temporary static data</div><h1><?= esc($heading) ?></h1></div><p>These five sample customer records are supplied by the <code>Customers</code> controller and rendered with a <code>foreach</code> loop.</p></section>
<div class="table-wrap">
    <table>
        <thead><tr><th>Full name</th><th>Email</th><th>Phone</th></tr></thead>
        <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr><td><?= esc($customer['full_name']) ?></td><td><?= esc($customer['email']) ?></td><td><?= esc($customer['phone']) ?></td></tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
