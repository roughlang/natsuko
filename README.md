# Macにhome brewをインストールする

[[Homebrew](https://brew.sh/)](https://brew.sh/index_ja)

```
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
```

zshじゃなくても通る。ふーん。

```
% brew --version
Homebrew 3.3.7
Homebrew/homebrew-core (git revision da3296385e7; last commit 2021-12-12)
```

## 


## product env

git cloneする
```
$ git clone https://github.com/roughlang/natsuko.git
```
.envの設置
```
$ mv natsuko prod
$ cd prod/app
$ cp -p .env.example .env
```
`.env`に適切な設定をします。
最適化を行います。
```
$ bash optimize.sh
```

```
mkdir -p storage/framework/app/cache;
mkdir -p storage/framework/app/compile;
mkdir -p storage/framework/cache/data;
mkdir -p storage/framework/sessions;
mkdir -p storage/framework/views;
mkdir -p storage/logs;
```