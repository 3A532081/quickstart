<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2018/10/20
 * Time: 下午 11:35
 */
@if (count($errors) > 0)
    <!-- 表單錯誤清單 -->
    <div class="alert alert-danger">
        <strong>哎呀！出了些問題！</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif