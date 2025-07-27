<?= '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL ?>

<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/">
    <channel>
        <title>Locations</title>
        <description>Contain a list of available sites</description>
        <language>en-en</language>

        @foreach ($sites as $site)
            <item>
                <title><![CDATA[{{ $site->name }}]]></title>
                <description><![CDATA[{{ $site->description }}]]></description>

                <image>
                    <url>{{ asset($site->siteImage->image) }}</url>
                </image>

                <dc:coverage>
                    <![CDATA[ {{ $site->address }}, {{ $site->postcode }}, {{ $site->siteLocation->name }} ]]>
                </dc:coverage>

                <geo>
                    <lat>{{ $site->siteLocation->latitude }}</lat>
                    <long>{{ $site->siteLocation->longitude }}</long>
                </geo>
            </item>
        @endforeach
    </channel>
</rss>
