<?php

declare(strict_types=1);

namespace Abryb\ENadawca;

/**
 * @author Błażej Rybarkiewicz <b.rybarkiewicz@gmail.com>
 */
class ENadawcaTypeMap
{
    public static function getTypeMap()
    {
        return [
            [
                'type_name' => 'date',
                'type_ns'   => 'http://www.w3.org/2001/XMLSchema',
                'from_xml'  => function ($input) {
                    return ($v = static::getXmlValue($input)) ? new \DateTime($v) : null;
                },
                'to_xml' => function ($input) {
                    if (!$input instanceof \DateTimeInterface) {
                        return '';
                    }

                    return sprintf('<%1$s>%2$s</%1$s>', 'date', $input->format('Y-m-d'));
                },
            ],
            [
                'type_name' => 'dateTime',
                'type_ns'   => 'http://www.w3.org/2001/XMLSchema',
                'from_xml'  => function ($input) {
                    return ($v = static::getXmlValue($input)) ? new \DateTime($v) : null;
                },
                'to_xml' => function ($input) {
                    if (!$input instanceof \DateTimeInterface) {
                        return '';
                    }

                    return sprintf('<%1$s>%2$s</%1$s>', 'dateTime', $input->format('Y-m-d\TH:i:sP'));
                },
            ],
            [
                'type_name' => 'double',
                'type_ns'   => 'http://www.w3.org/2001/XMLSchema',
                'from_xml'  => function ($input) {
                    return ($v = static::getXmlValue($input)) ? (float) $v : null;
                },
                'to_xml' => function ($input) {
                    return sprintf('<%1$s>%2$s</%1$s>', 'double', $input);
                },
            ],
            [
                'type_name' => 'decimal',
                'type_ns'   => 'http://www.w3.org/2001/XMLSchema',
                'from_xml'  => function ($input) {
                    return ($v = static::getXmlValue($input)) ? (float) $v : null;
                },
                'to_xml' => function ($input) {
                    return sprintf('<%1$s>%2$s</%1$s>', 'decimal', $input);
                },
            ],
        ];
    }

    protected static function getXmlValue($xml)
    {
        $doc = new \DOMDocument();
        $doc->loadXML($xml);

        return $doc->textContent;
    }
}
