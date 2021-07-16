<?php
/**
 * @var \App\Model\Entity\Poll $poll
 * @var \App\View\AppView $this
 */
?>
<section class="hero is-primary">
    <div class="hero-body">
        <p class="title">
            <?= __('Poll')?>: <?= h($poll->name)?>
        </p>
        <p class="subtitle">
            <?= __('Make your opinion count')?>
        </p>
    </div>
</section>

<div class="box">
    <?php foreach ($poll->options as $option):?>
    <article class="media">
        <figure class="media-left">
            <p class="image is-128x128">
                <?= $this->Html->image($option->photo_url, [
                    'style' => 'height:90%',
                ])?>
            </p>
        </figure>
        <div class="media-content">
            <div class="content">
                <p>
                    <strong><?= h($option->name)?></strong>
                </p>
            </div>
            <nav class="level is-mobile">
                <div class="level-left">
                    <a class="level-item">
                        <div class="control">
                            <?= $this->Form->postButton(__('Vote'),
                                [
                                    'action' => 'vote',
                                    $option->id,
                                ],
                                ['class' => 'button is-primary']
                            )?>
                        </div>
                    </a>
                </div>
            </nav>
        </div>
    </article>
    <?php endforeach;?>
</div>

