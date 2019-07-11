#yamlを利用する

yamlから値を取得して、自作のformhelperで
ラジオボタン、チェックボックス、セレクトボックスを作る

configファサード使えは以下のように取得可能
`\Config::get('pref')`

##まとめ

Symfonyのyaml コポーネントをインストール
`composer require symfony/yaml`

config/app.php にaliaseを設定
`'Yaml' => 'Symfony\Component\Yaml\Yaml'`

controllerでYamlファサードを使ってyamlファイルを取得
*`config_path()`でpathが取れる*
`Yaml::parse(file_get_contents(config_path('yaml.yaml')))`