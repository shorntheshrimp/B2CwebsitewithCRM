<!-- breadcrumb Start-->
<?php //$searchCount = 0; ?>
<div class="page-notification">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="<?= $this->Url->build(['controller' => 'home', 'action'=>'#']); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= $this->Url->build(['controller' => 'home', 'action'=>'findprofessionals']); ?>">Find Craftsman</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End-->

<div class="comments-area">
    <div class="users index content">

        <!-- search ui start -->
        <?= $this->Form->create(null,['type'=>'get']) ?>
        <?= $this->Form->control('key', [
            'label'=>false,
            'value'=>$this->request->GetQuery('key'),
            'style'=>'float:left; margin-left:0.5%; color:slategray; width:91%;',
            'placeholder'=>'Search by username'])
        ?>
        <?= $this->Form->submit(__('🔎︎'), array(
            'style'=>'margin-bottom:40px'
        )) ?>
        <?= $this->Form->end() ?>
        <hr class="sidebar-divider my-0">
        <!-- search ui end -->

        <br><br>
        <h4><?php echo $query->count(); ?> professionals found</h4>
        <hr class="sidebar-divider my-0"><br>

            <?php foreach ($builders as $key => $builder): ?>

                <div class="comment-list">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <?php
                                if($builder['avatar']!= null){

                                    echo $this->Html->image($builder['avatar'],['style'=>'border-radius: 50%, width: 30vw']);
                                }else{

                                    echo $this->Html->image('tb-avatar-none.jpg',['style'=>'border-radius: 50%, width: 30vw']);
                                }
                                ?>
                            </div>
                            <div class="desc">
                                <p class="comment">
                                    <?= $builder->description ?>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h5>
                                            <a href="#"><?= $builder->name ?></a>
                                        </h5>
                                        <p class="date"> <?= $builder->email ?> </p>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="<?= $this->Url->build(['controller' => 'builder', 'action'=>'view']); ?>/<?=$builder->id?>" class="btn-reply text-uppercase" style="color: mediumseagreen">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php //$searchCount++; ?>

            <?php endforeach; ?>
        </div>
    <br><br>


    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous'))?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
    </div>

    </div>

    <br>
</div>
