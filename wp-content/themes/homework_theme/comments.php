<?php
if (comments_open()) {
    if (get_comments_number() == 0) { ?>
        <section class="thin-container post__comments-section__wrapper">
        <h3>Комментариев пока нет, но вы можете стать первым</h3>
            <?php
            $fields =  array(

                'author' =>
                    '<p><label for="name">
                         <input type="text" id="name" name="author" placeholder="Name" class="post__comments-section__comments__form__text" value="' . esc_attr( $commenter['comment_author'] ) .
                    '">
                    </label></p>',

                'email' =>
                    '<p><label for="email">
                         <input type="text" id="email" name="email" placeholder="E-Mail" class="post__comments-section__comments__form__text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '">
                     </label></p>',

                'url' =>
                    '<p><label for="site">
                            <input type="text" id="site" name="site" placeholder="Web Site" class="post__comments-section__comments__form__text" value="' . esc_attr( $commenter['comment_author_url'] ) .
                    '">
                        </label></p>',
                'job' => '<p><label for="job">
                            <input type="text" id="job" name="job" placeholder="Job" class="post__comments-section__comments__form__text">
                        </label></p>',
            );
            $args = array(
                'id_form'           => 'commentform',
                'class_form'      => 'post__comments-section__comments__form__wrapper',
                'id_submit'         => 'submit',
                'class_submit'      => 'post__comments-section__comments__form__submit',
                'name_submit'       => 'submit',
                'title_reply'       => __( 'Leave a Reply' ),
                'title_reply_to'    => __( 'Leave a Reply to %s' ),
                'cancel_reply_link' => __( 'Cancel Reply' ),
                'label_submit'      => __( 'Send' ),
                'format'            => 'xhtml',
                'comment_notes_before'     => '',
                'comment_field' =>  '<p class="post__comments-section__comments__form__textarea__wrapper"><label for="comment">
                            <textarea name="comment" id="comment" placeholder="Comment" class="post__comments-section__comments__form__text post__comments-section__comments__form__textarea"></textarea>
                        </label></p>',

                'must_log_in' => '<p class="must-log-in">' .
                    sprintf(
                        __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
                        wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
                    ) . '</p>',

                'logged_in_as' => '<p class="logged-in-as">' .
                    sprintf(
                        __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
                        admin_url( 'profile.php' ),
                        $user_identity,
                        wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
                    ) . '</p>',
                'fields' => apply_filters( 'comment_form_default_fields', $fields ),
            );
            //            echo $comments_args->comment_field;
            comment_form($args);
            ?>
        </section>
    <?php } else { ?>
        <section class="thin-container post__comments-section__wrapper">
            <h2 class="post__comments-section__headline">
                10 Comments
            </h2>
            <ul class="post__comments-section__comments__wrapper">
                <?php foreach ( $comments as $comment ) : ?>
                <?php if ($comment->comment_parent == 0) : ?>
                        <li class="post__comments-section__comments__item">
                    <div class="post__comments-section__comments__item__top">
                    <span class="post__comments-section__comments__item__name">
                        <?php echo $comment->comment_author; ?>
                    </span>
                        <span class="post__comments-section__comments__item__date">
                        <?php echo $comment->comment_date_gmt; ?>
                    </span>
                        <span class="post__comments-section__comments__item__reply-btn">
                            <?php

                            $link = get_comment_reply_link(array(
                                'reply_text' => "REPLY",
                                'respond_id' => 'comment',
                                'depth' => 2,
                                'max_depth' => 10,
                            ), $comment, get_the_ID() );

                            // тут можем обработать ссылку перед выводом на экран
                            $link = str_replace('comment-reply-link', 'fa fa-rotate-left', $link );

                            echo  $link;
                            ?>
                    </span>
                    </div>
                    <div class="post__comments-section__comments__item__text__wrapper">
                        <div class="post__comments-section__comments__item__text__img">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="clearfix"></div>
                        <p class="post__comments-section__comments__item__text__paragraph">
                            <?php echo get_comment_text();?>
                        </p>
                    </div>
                    <ul class="post__comments-section__comments__reply__wrapper">
                        <?php foreach ($comment->get_children() as $children) : ?>
                            <li class="post__comments-section__comments__item">
                                <div class="post__comments-section__comments__item__top">
                                    <span class="post__comments-section__comments__item__name">
                                        <?php echo $children->comment_author; ?>
                                    </span>
                                    <span class="post__comments-section__comments__item__date">
                                        <?php echo $children->comment_date_gmt; ?>
                                    </span>
                                </div>
                                <div class="post__comments-section__comments__item__text__wrapper post__comments-section__comments__reply__text">
                                    <div class="post__comments-section__comments__item__text__img">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class="post__comments-section__comments__item__text__paragraph post__comments-section__comments__reply__paragraph">
                                        <?php echo $children->comment_content;?>
                                    </p>
                                </div>
                            </li>

                        <?endforeach;?>
                    </ul>
                </li>
                    <?php endif; ?>

                <? endforeach;?>
            </ul>
            <?php
            $fields =  array(

                'author' =>
                    '<p><label for="name">
                         <input type="text" id="name" name="author" placeholder="Name" class="post__comments-section__comments__form__text" value="' . esc_attr( $commenter['comment_author'] ) .
                    '">
                    </label></p>',

                'email' =>
                    '<p><label for="email">
                         <input type="text" id="email" name="email" placeholder="E-Mail" class="post__comments-section__comments__form__text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '">
                     </label></p>',

                'url' =>
                    '<p><label for="site">
                            <input type="text" id="site" name="site" placeholder="Web Site" class="post__comments-section__comments__form__text" value="' . esc_attr( $commenter['comment_author_url'] ) .
                    '">
                        </label></p>',
                'job' => '<p><label for="job">
                            <input type="text" id="job" name="job" placeholder="Job" class="post__comments-section__comments__form__text">
                        </label></p>',
            );
            $args = array(
                'id_form'           => 'commentform',
                'class_form'      => 'post__comments-section__comments__form__wrapper',
                'id_submit'         => 'submit',
                'class_submit'      => 'post__comments-section__comments__form__submit',
                'name_submit'       => 'submit',
                'title_reply'       => __( 'Leave a Reply' ),
                'title_reply_to'    => __( 'Leave a Reply to %s' ),
                'cancel_reply_link' => __( 'Cancel Reply' ),
                'label_submit'      => __( 'Send' ),
                'format'            => 'xhtml',
                'comment_notes_before'     => '',
                'comment_field' =>  '<p class="post__comments-section__comments__form__textarea__wrapper"><label for="comment">
                            <textarea name="comment" id="comment" placeholder="Comment" class="post__comments-section__comments__form__text post__comments-section__comments__form__textarea"></textarea>
                        </label></p>',

                'must_log_in' => '<p class="must-log-in">' .
                    sprintf(
                        __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
                        wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
                    ) . '</p>',

                'logged_in_as' => '<p class="logged-in-as">' .
                    sprintf(
                        __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
                        admin_url( 'profile.php' ),
                        $user_identity,
                        wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
                    ) . '</p>',
                'fields' => apply_filters( 'comment_form_default_fields', $fields ),
            );
//            echo $comments_args->comment_field;
            comment_form($args);
            ?>
            <p class="post__comments-section__comments__underform__paragraph">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mattis semper nisl, vitae malesuada
                massa egestas a. Vestibulum vestibulum urna sapien, eu bibendum magna ornare non.
            </p>
        </section>
    <?php }
} else { ?>
    <h3>Обсуждения закрыты для данной страницы</h3>
<?php }
?>