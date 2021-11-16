# 勉強時間の記録サイト「studyaid」
<img width="1179" alt="スクリーンショット 2021-11-15 23 31 38" src="https://user-images.githubusercontent.com/81844445/141799466-d84f89a4-01ef-446a-8b8c-4b2aaf8952ef.png">

## 1.サイト概要

Studyaid:[https://studyaid.work/](https://studyaid.work/)

Studyaidは毎日の勉強時間を楽しく記録することができるサイトです。

記録した学習時間はカレンダーで見ることができるので、自分がどのくらい勉強したのか一目瞭然。

<img width="1188" alt="スクリーンショット 2021-11-15 23 32 57" src="https://user-images.githubusercontent.com/81844445/141800280-1a31ec82-ae84-47d7-87a4-cf43e88095af.png">

小学生と中学生の子どもがいるシングルマザーなので、毎日の子どもたちの勉強時間を管理するのが大変。

そんな時に「子どもたちが今日はどのくらい勉強したのか」、「自分がどのくらい勉強して、どのくらい継続できているのか」、それを楽しく記録して、楽しく管理できるアプリが欲しいと思い作成しました。

これを利用すれば、子どもたちは楽しく学習時間を入力することができ、自分がどのくらい勉強できているのか把握することができます。

勉強を記録することが楽しくなり、継続力が身につくと考えました。

友達がどのくらい勉強しているかも把握することができるので、他の人の投稿を見ることでやる気アップにも繋がります。


親側はこれを見ることで、子どもたちが今日何をどのくらい勉強したのかがすぐ分かるので、仕事で忙しくても把握することができます。

メッセージだけの投稿もできるので、今日会ったことや、簡単なメモも残すことができます。

もちろん子どもだけではなく、大人も使用することができます。

実際に現在、自分での使用はもちろん、子どもたち、友達にも使用してもらっています。

## 2.使用技術

### フロントエンド
- HTML
- CSS
- Bootstrap

### バックエンド
- PHP
- Laravel
- PostgreSQL
- composer

### インフラ
- Docker(開発環境)
- AWS(VPC,EC2,RDS,IAM,ACM,Route53,EIP)

### その他
- Git/GitHub

## 3.インフラ構成図

![インフラ構成図](https://user-images.githubusercontent.com/81844445/141800169-f0797ae0-8c54-4070-a48b-01eba7012e7b.jpg)

## 4.ER図

![studyaid-er](https://user-images.githubusercontent.com/81844445/141800197-b4a5721a-3e69-47f8-aafc-9b2bbbfd5ba9.png)

## 5.機能一覧
### 基本機能
- 勉強内容の設定
<img width="1188" alt="スクリーンショット 2021-11-16 8 28 04" src="https://user-images.githubusercontent.com/81844445/141987674-254289ff-ad63-4ba4-ae84-b7796c770991.png">

- 今日の学習の登録
<img width="1188" alt="スクリーンショット 2021-11-16 8 28 25" src="https://user-images.githubusercontent.com/81844445/141987623-b274693c-7ebb-4019-84c7-4eb02e04310b.png">

- 投稿機能
<img width="1304" alt="スクリーンショット 2021-11-16 8 28 39" src="https://user-images.githubusercontent.com/81844445/141987645-1d82e35d-c5ca-463d-8c4b-e7b7bf937e31.png">


### 認証機能
- ユーザー登録
- ログイン
- ログアウト
- ゲストログイン
- Googleアカウントでのログイン・登録
- パスワードの再設定

## 6.今後の実装したいもの
- 投稿へのコメント機能
- レスポンシブ対応
- 画像投稿機能
- 他ユーザーの学習状況の確認
- 学習ランキング
- 目標設定機能

## 作成者
notosan-as


- [Abdel Elrafa](https://abdelelrafa.com)




