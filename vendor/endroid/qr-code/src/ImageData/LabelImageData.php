<?php

declare(strict_types=1);

namespace Endroid\QrCode\ImageData;

use Endroid\QrCode\Label\LabelInterface;

class LabelImageData
{
    /** @var int */
    private $width;

    /** @var int */
    private $height;

    private function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public static function createForLabel(LabelInterface $label): self
    {
        if (!function_exists('imagettfbbox')) {
            throw new \Exception('Function "imagettfbbox" does not exist: check your FreeType installation');
        }

        $labelBox = imagettfbbox($label->getFont()->getSize(), 0, $label->getFont()->getPath(), $label->getText());

        if (!is_array($labelBox)) {
            throw new \Exception('Unable to generate label image box: check your FreeType installation');
        }

        return new self(
            intval($labelBox[2] - $labelBox[0]),
            intval($labelBox[0] - $labelBox[7])
        );
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }
}
