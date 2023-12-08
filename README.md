# sk-phenomena-recording-portal
Full Source Code for A Phenomena Recording System.

## DESCRIPTION
This is a completely free source code (including database structure) for "Phenomena Recording System", a webapp I developed using Yii2 Framework, MySQL Database, and AdminLTE3. The app consists of the Indonesian Language as my first language. But overall, it's easy to use since the code is mostly English. 

The features this app has are as follows:
1. Phenomenon input (such as online news or printed newspaper, recorded to the database)
2. Phenomena categorization (manual) into 24 categories
3. Dashboard, snapshots on the database
4. Monitoring, descriptive analysis of users' activity in phenomena management
5. Dynamic tabulation for phenomena, aggregately or separately
6. User management
7. News crawling using Google CSE API and News API

### The original version of this app was the main study for my research [here](https://ajstd.org/index.php/ajstd/article/view/680) and [here](https://jurnal.kominfo.go.id/index.php/pekommas/article/view/2040105).

## HOW TO ENJOY
Before using this code, you gotta make sure you have your local server ready (such xampp or wamp), IDE (I use VSCode), git and composer installed on your computer.

1. Open your terminal in ```htdocs``` (if you use xampp) or ```www``` (if you use wamp)
2. Run this code to clone the repo using ```git clone https://github.com/khansasafira19/sk-phenomena-recording-portal.git```
3. Access the folder using ```cd sk-phenomena-recording-portal```, still in your terminal
4. Run ```composer update``` to make everything run on the app (it is to fill up the vendor folder)
5. Access your phpmyadmin, create a database, and name it "sk_prs" or whatever you like. Then import the .sql file in ```root\sql``` folder.
6. Make changes to the ```config\db.php``` file on the database connection, according to your setup.
7. That's it, the app should run now. Access it on http://localhost/sk-phenomena-recording-portal/ using username ```admin``` and password ```admins```

## PREVIEW
More previews are available [here](https://github.com/khansasafira19/sk-phenomena-recording-portal/tree/master/demo-pics).
![](demo-pics/login.png?raw=true)
![](demo-pics/create-phenomenon.png?raw=true)
![](demo-pics/tabulation-main.png?raw=true)
![](demo-pics/monitoring-category.png?raw=true)

## LICENSE
Copyright © 2023 by Safira Khansa (Nofriani)
Visit more at https://github.com/khansasafira19 and https://khansasafira19.github.io/

This application is completely free to use, although selling it without my consent or using it in your name is not permissible.
The use for any part of my code should include the link to this repo. Thank you for understanding.

## CONTACT
- If you have any questions regarding this app, contact me on WhatsApp +62-856-6499-1937
- If enjoy using the code, and feel grateful, you can buy me a cup of tea via OVO or GoPay at +62-856-6499-1937. Actually, as a Muslim myself, sending out your prayers for me and my family is even better.

Thanks for stopping by. :)

I have a blog, https://safirakhansa19.wordpress.com/, I wrote some books too:
* [Ku Melangkah dengan Bismillah](https://store.ums.ac.id/buku/novel/ku-melangkah-dengan-bismillah-bila-selangkah-ku-datang-pada-mu-seriu-langkah-kau-datang-padaku.html), a novel written in Indonesian.'
* [Gerimis Hujan di Hati Hafu](https://ebooks.gramedia.com/id/buku/gerimis-hujan-di-hati-hafu), a novel also written in Indonesian.
* [Easily Understanding English](https://drive.google.com/drive/folders/10DZsqUkf4jFF7N8kFDGATDjFwWLU8Spn), a book written in Indonesian for English learners. It's an ebook, free to download, read and share.
* [Pembangunan Website dengan Yii2 Framework](https://books.google.co.id/books/about/Pembangunan_Website_dengan_Yii2_Framewor.html?id=bqOqDwAAQBAJ&redir_esc=y). It's a step-by-step guide to code in Yii2, written in Indonesian.

Here are some research papers I did, all written in English:
* [Harnessing Technology Acceptance Model (TAM) on Information System to Safeguard Accelerated Data Collecting and Processing Amid COVID-19 Pandemic](https://jurnal.kominfo.go.id/index.php/pekommas/article/view/2070104), 2022
* [Harnessing Multi-label Classification Approaches for Economic Phenomena Categorization](https://ajstd.org/index.php/ajstd/article/view/680), 2021
* [Machine Learning Application for Classification Prediction of Household's Welfare Status](http://jitce.fti.unand.ac.id/index.php/JITCE/article/view/68), 2020
* [Comparisons of Supervised Machine Learning Techniques in Predicting the Classification of the Household's Welfare Status](https://jurnal.kominfo.go.id/index.php/pekommas/article/view/2040105), 2019
* [Analysis On Internet Pattern of Youtube Browsing in Indonesia Using Web Crawling and Unsupervised Learning](https://jurnal.kominfo.go.id/index.php/iptekkom/article/view/93-106), 2018
