<!-- Header -->
<?php
include('./header.php');
?>

<main class="l-main p-contact">
    <div class="l-inner">
        <div class="p-contact__content">
            <div class="c-page-heading">
                <h1 lang="en" class="c-page-title">Contact</h1>
            </div><!-- /.c-page-heading -->
            <div class="p-contact__body">
                <form action="" class="p-contact__form">
                    <dl class="p-contact__form-list">
                        <div class="p-contact__form-item">
                            <dt class="p-contact__form-item-label">
                                <label>お問い合わせの種類</label>
                            </dt>
                            <dd class="p-contact__form-item-value-group">
                                <label for="type-product" class="inquiry-type">
                                    <input type="radio" name="type" value="product" id="type-product" checked required>商品について
                                </label>
                                <label for="type-store" class="inquiry-type">
                                    <input type="radio" name="type" value="store" id="type-store" required>店舗について
                                </label>
                                <label for="type-other" class="inquiry-type">
                                    <input type="radio" name="type" value="other" id="type-other" required>その他
                                </label>
                            </dd>
                        </div>
                        <div class="p-contact__form-item">
                            <dt class="p-contact__form-item-label">
                                <label for="name">お名前</label>
                            </dt>
                            <dd class="p-contact__form-item-value">
                                <input type="text" placeholder="山田 太郎" name="" id="name" class="p-contact__form-item-input" required>
                            </dd>
                        </div>
                        <div class="p-contact__form-item">
                            <dt class="p-contact__form-item-label">
                                <label for="mail">メールアドレス</label>
                            </dt>
                            <dd class="p-contact__form-item-value">
                                <input type="email" placeholder="sample@gmail.com" name="" id="mail" class="p-contact__form-item-input" required>
                            </dd>
                        </div>
                        <div class="p-contact__form-item">
                            <dt class="p-contact__form-item-label">
                                <label for="inquiry">お問い合わせ内容</label>
                            </dt>
                            <dd class="p-contact__form-item-value">
                                <textarea name="" placeholder="お問い合わせ内容を記入してください。" id="inquiry" class="p-contact__form-item-input" required></textarea>
                            </dd>
                        </div>
                    </dl>
                    <div class="p-contact__form-submit-button">
                        <input type="submit" value="送信" class="p-contact__form-submit">
                    </div><!-- /.p-contact__form-submit-button -->
                </form><!-- /.p-contact__form -->
            </div><!-- /.p-contact__body -->
        </div><!-- /.p-contact__content -->
    </div><!-- /.l-inner -->
</main><!-- /.l-main -->

<!-- Footer -->
<?php
include('./footer.php');
?>
