<?php
namespace App\Enums\RiskLevels;

enum RiskLevel: string
{
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';
}
