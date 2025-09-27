# SafeMock

**SafeMock** は、PHPでのAPI開発を型安全かつ効率的にするためのOSSライブラリです。  
現在開発中の段階で、まだMVPの実装も進行中です。

<a href="https://php.net"><img src="https://img.shields.io/badge/PHP-8.4+-777BB4" alt="PHP 8.4.12"></a>
<a href="https://github.com/makohawk/safemock/blob/main/LICENSE"><img src="https://img.shields.io/badge/license-MIT-blue.svg" alt="GitHub license"></a>

## 開発状況

- MVP段階で、基本設計と主要機能の検討中
- 実装済み機能はまだありません
- 今後、以下の設計で開発予定です

## 設計概要（予定）

- **型安全データ検証**  
  JSON SchemaやPHP型定義に基づき、リクエスト/レスポンスの型チェックを自動生成

- **モックサーバ生成**  
  REST JSON APIのモックサーバを簡単に立ち上げ可能  
  TDDや統合テストで利用予定

- **型安全テストデータ生成**  
  スキーマ定義に基づき、安全なテストデータを生成

## 対応（予定）

- PHP 8.4+
- REST JSON API
- PHPUnit/Pest 互換

## ライセンス

SafeMockライブラリは、MITライセンスのもとで提供されるオープンソースソフトウェアです。
