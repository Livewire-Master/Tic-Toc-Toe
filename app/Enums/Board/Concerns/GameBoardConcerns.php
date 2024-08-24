<?php

namespace App\Enums\Board\Concerns;

use BackedEnum;

trait GameBoardConcerns
{
    /**
     * Reject logic
     */
    public function reject(): bool
    {
        return false;
    }

    /**
     * Get the base translation key
     */
    protected static function baseTranslationKey(): string
    {
        return 'board';
    }

    /**
     * Get the identifier
     */
    public static function identifier(): string
    {
        return self::translationKey();
    }

    /**
     * Get the translation key
     */
    public static function translationKey(): string
    {
        return str(basename(self::class))->replace('\\', '-')->toString();
    }

    /**
     * Get the translation key for labels
     */
    public static function translationLabelKey(): string
    {
        return 'label';
    }

    /**
     * Get the translation key for enum-headline
     */
    public static function translationHeadlineKey(): string
    {
        return 'headline';
    }

    /**
     * Get the translation key for colors
     */
    public static function translationColorKey(): string
    {
        return 'color';
    }

    /**
     * Get the value
     */
    public function key(): string
    {
        return strtolower($this->value);
    }

    /**
     * Get the value
     */
    public function color(): string
    {
        return __(self::baseTranslationKey() . '.' . self::translationKey() . '.' . self::translationColorKey() . '.' . $this->key());
    }

    /**
     * Get the label
     */
    public function label(): string
    {
        return __(self::baseTranslationKey() . '.' . self::translationKey() . '.' . self::translationLabelKey() . '.' . $this->key());
    }

    /**
     * Get the headline for enum
     */
    public static function headline(): string
    {
        return __(self::baseTranslationKey() . '.' . self::translationKey() . '.' . self::translationHeadlineKey());
    }

    /**
     * Get the pairs
     * @noinspection PhpUndefinedMethodInspection
     */
    public static function pairs(): array
    {
        return collect(self::cases())
            ->reject(fn (BackedEnum $item) => $item->reject())
            ->mapWithKeys(function (BackedEnum $item, int $index) {
                $_ = [
                    'key' => $item->key(),
                    'label' => $item->label(),
                    'color' => $item->color(),
                ];
                return [$index => $_];
            })
            ->toArray();
    }

    /**
     * Get the config pair
     */
    public static function config(string $hint = null): array
    {
        return [
            self::identifier() => [
                'hint' => $hint,
                'title' => self::headline(),
                'pairs' => self::pairs()
            ]
        ];
    }
}
