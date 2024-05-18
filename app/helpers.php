<?php

if (!function_exists('formatCurrencyVND')) {
    /**
     * Format a number as Vietnamese Dong currency.
     *
     * @param float|int $amount
     * @return string
     */
    function formatCurrencyVND($amount)
    {
        return number_format($amount, 0, ',', '.') . ' ₫';
    }
}
