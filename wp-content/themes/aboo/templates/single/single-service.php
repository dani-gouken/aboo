<p class="font-weight-bold mb-2"><?php _e("Delivered By", "aboo") ?></p>
<?php $deliveredBy = get_field("delivered_by") ?>
<?php if (!empty($deliveredBy)) : ?>
    <ul>
        <?php foreach ($deliveredBy as $institution_array) : ?>
            <?php $institution = end($institution_array); ?>
            <li><a href="<?= get_permalink($institution->ID) ?>" class="text-info"><?= $institution->post_title ?></a></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>
<p class="mb-2">
    <span class="font-weight-bold"><?= _e("Cost") ?></span>:
    <?php $cost = get_field("cost") ?>
    <?= $cost == null || $cost == 0 ? "Free" : "$cost XAF" ?>
</p>
<?php $documents_required = get_field("document_required") ?>
<?php if (!empty($documents_required)) : ?>
    <p class="font-weight-bold"><?= _e("Document required") ?></p>
    <p class="mb-2">
        <ul>
            <?php foreach ($documents_required as $document_required) : ?>
                <?php $document_required = end($document_required); ?>
                <li>
                    <a href="<?= get_permalink($document_required->ID) ?>" class="text-info">
                        <?= $document_required->post_title ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </p>
<?php endif ?>
<?php $other_requirements = get_field("other_requirement") ?>
<?php if (!empty($other_requirements)) : ?>
    <p class="font-weight-bold"><?= _e("Other requirement") ?></p>
    <p class="mb-2">
        <ul>
            <?php foreach ($other_requirements as $other_requirement) : ?>
                <?php $other_requirement = end($other_requirement); ?>
                <li><?= $other_requirement ?></li>
            <?php endforeach ?>
        </ul>
    </p>
<?php endif ?>
<p class="mb-4">
    <?= the_content() ?>
</p>
<?php $frequently_asked_questions = get_field("frequently_asked_questions") ?>
<?php if (!empty($frequently_asked_questions)) : ?>
    <p class="mb-2">
        <span class="font-weight-bold"><u><?= _e("Frequently asked question") ?></u></span>
        <ul>
            <?php foreach ($frequently_asked_questions as $frequently_asked_question) : ?>
                <li>
                    <p class="font-weight-bold">
                        <?= $frequently_asked_question["question"] ?>
                    </p>
                    <p>
                        <?= $frequently_asked_question["answer"] ?>
                    </p>
                </li>
            <?php endforeach ?>
        </ul>
    </p>
<?php endif ?>