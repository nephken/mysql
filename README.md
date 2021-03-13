### リポジトリ
sudo rpm -Uvh https://dev.mysql.com/get/mysql80-community-release-el7-1.noarch.rpm

### mysqlクライアント
sudo yum install -y mysql-community-client.x86_64

### phpでmysqlを接続する何か
https://teratail.com/questions/74046
yum -y install php-mysql

### php.iniの追加設定
https://teratail.com/questions/41291

### 接続
mysql -h 10.100.1.4 -u admin -p


### phpをインストール
sudo yum install -y oracle-php-release-el7



### 初期設定参考
https://affiwork.net/php-settings/

### 無効化
systemctl stop firewalld
systemctl disable firewalld
SELINUX=disabled

### 有効化
systemctl start httpd
stystemctl enable httpd

### adminのpluginを変更
alter user 'admin'@'%' identified with mysql_native_password by 'ATomitech_0120#';
### 確認
select user, host, plugin from user;
