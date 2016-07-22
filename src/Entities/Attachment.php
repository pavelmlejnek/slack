<?php

namespace Slack\Entities;

use Nette\Object;

class Attachment extends Object
{
    /**
     * @var string $authorIcon
     */
    private $authorIcon;

    /**
     * @var string $authorName
     */
    private $authorName;

    /**
     * @var string $color
     */
    private $color;

    /**
     * @var string $fallback
     */
    private $fallback;

    /**
     * @var array $fields
     */
    private $fields = [];

    /**
     * @var string $footer
     */
    private $footer;

    /**
     * @var string $footerIcon
     */
    private $footerIcon;

    /**
     * @var string $imageUrl
     */
    private $imageUrl;

    /**
     * @var string $preText
     */
    private $preText;

    /**
     * @var string $text
     */
    private $text;

    /**
     * @var string $thumbUrl
     */
    private $thumbUrl;

    /**
     * @var int $timestamp
     */
    private $timestamp;

    /**
     * @var string $title
     */
    private $title;

    /**
     * @var string $titleLink
     */
    private $titleLink;

    /**
     * @param string $authorIcon
     */
    public function setAuthorIcon($authorIcon)
    {
        $this->authorIcon = $authorIcon;
    }

    /**
     * @return string
     */
    public function getAuthorIcon()
    {
        return $this->authorIcon;
    }

    /**
     * @param string $authorName
     */
    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;
    }

    /**
     * @return string
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $fallback
     */
    public function setFallback($fallback)
    {
        $this->fallback = $fallback;
    }

    /**
     * @return string
     */
    public function getFallback()
    {
        return $this->fallback;
    }

    /**
     * @param string $title
     * @param string $value
     * @param bool $short
     */
    public function addField($title, $value, $short)
    {
        $this->fields[] = [
            'title' => $title,
            'value' => $value,
            'short' => $short
        ];
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param string $footer
     */
    public function setFooter($footer)
    {
        $this->footer = $footer;
    }

    /**
     * @return string
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * @param string $footerIcon
     */
    public function setFooterIcon($footerIcon)
    {
        $this->footerIcon = $footerIcon;
    }

    /**
     * @return string
     */
    public function getFooterIcon()
    {
        return $this->footerIcon;
    }

    /**
     * @param string $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param string $preText
     */
    public function setPreText($preText)
    {
        $this->preText = $preText;
    }

    /**
     * @return string
     */
    public function getPreText()
    {
        return $this->preText;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $thumbUrl
     */
    public function setThumbUrl($thumbUrl)
    {
        $this->thumbUrl = $thumbUrl;
    }

    /**
     * @return string
     */
    public function getThumbUrl()
    {
        return $this->thumbUrl;
    }

    /**
     * @param int $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $titleLink
     */
    public function setTitleLink($titleLink)
    {
        $this->titleLink = $titleLink;
    }

    /**
     * @return string
     */
    public function getTitleLink()
    {
        return $this->titleLink;
    }
}
