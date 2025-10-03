<?php
namespace SafeMock\Validator;

class Validator
{
    /**
     * データがスキーマ通りかを検証
     *
     * @param array $data   入力データ
     * @param array $schema ["key" => "type"] 形式
     * @return bool
     */
    public function validate(array $data, array $schema): bool
    {
        foreach ($schema as $key => $type) {
            if (!array_key_exists($key, $data)) {
                return false; // 必須キーが存在しない
            }
            
            // 型チェック
            if (!$this->checkType($data[$key], $type)) {
                return false;
            }
        }
        return true;
    }

    /**
     * 型をチェックする
     */
    private function checkType(mixed $value, string $type): bool
    {
        return match ($type) {
            "int", "integer"      => is_int($value),
            "string"              => is_string($value),
            "bool", "boolean"     => is_bool($value),
            "float", "double"     => is_float($value),
            "array"               => is_array($value),
            "object"              => is_object($value),
            default               => true, // 未定義型は通す
        };
    }
}