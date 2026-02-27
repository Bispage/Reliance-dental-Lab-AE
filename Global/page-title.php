<?php
// Default values (fallback)
$pageTitle = $pageTitle ?? "Page Title";
$breadcrumb = $breadcrumb ?? [];
?>

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5 mt-4">

        <h1 class="display-2 text-white mb-3 animated slideInDown">
            <?= htmlspecialchars($pageTitle); ?>
        </h1>

        <?php if (!empty($breadcrumb)): ?>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">

                    <?php foreach ($breadcrumb as $item): ?>

                        <?php if (!empty($item['url'])): ?>
                            <li class="breadcrumb-item">
                                <a href="<?= htmlspecialchars($item['url']); ?>">
                                    <?= htmlspecialchars($item['label']); ?>
                                </a>
                            </li>
                        <?php else: ?>
                            <li class="breadcrumb-item active" aria-current="page">
                                <?= htmlspecialchars($item['label']); ?>
                            </li>
                        <?php endif; ?>

                    <?php endforeach; ?>

                </ol>
            </nav>
        <?php endif; ?>

    </div>
</div>
