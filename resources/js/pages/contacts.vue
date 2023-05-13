<template>
    <PageLayout>
        <div class="container__contacts">
            <ul class="info">
                <div class="Big__text">
                    <li>Контакти</li>
                </div>
                <p></p>
                <div class="Mid__text">
                    <li>Телефони</li>
                </div>
                <li><span style="color: #f39c42">Каса:</span> (099) 123-45-67</li>
                <li><span style="color: #f39c42">Служба підтримки:</span> (099) 765-43-21</li>
                <p></p>
                <div class="Mid__text">
                    <li>Наша адреса</li>
                </div>
                <li>ТРЦ "Forum Lviv", вулиця Під Дубом,<br> 7Б, Львів, Львівська область, Украина, 79000</li>
                <p></p>
                <div class="Mid__text">
                    <li>Email</li>
                </div>
                <li>abobacinemahelp@gmail.com</li>
            </ul>
            <img src="@/assets/cinema7.jpg" alt="кінотеатр">
        </div>
    </PageLayout>
</template>

<script setup>
import PageLayout from '@/shared/layouts/page-layout/page-layout.vue';
</script>

<style lang="scss" scoped>
a {
    text-decoration: none;
    font-family: "Arial";
    font-size: 1.5rem;
}

.info {
    list-style-type: none;
    font-family: "Arial";
    font-size: 1.5rem;
    color: #d0d0d0;
    margin-left: 3rem;
}

.Big__text {
    font-family: "Arial";
    font-size: 2.25rem;
    color: #f39c42;
    font-weight: bold;
}

.Mid__text {
    font-family: "Arial";
    font-size: 1.5rem;
    color: #f39c42;
    font-weight: bold;
    margin-bottom: 0.75rem;
    padding-top: 1.25rem;
}

.container__contacts {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.container__contacts img {
    display: flex;
    width: 40rem;
    height: 30rem;

    margin: 0 5.5rem 0 10rem;
    border: 2px solid #f39c42;
}</style>