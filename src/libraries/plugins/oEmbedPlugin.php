<?php
/**
 * Provides oEmbed integration.
 *
 * @author Dave Reid <dave@davereid.net>
 */
class oEmbedPlugin extends PluginBase
{
  public function onHead()
  {
    // How do I get this context?
    $oembed_href = '';
    $oembed_title = '';
    $oembed_headers = "<link rel=\"alternate\" type=\"application/json+oembed\" href=\"{$oembed_href}.json\" title=\"{$oembed_title}\" />";
    $oembed_headers = "<link rel=\"alternate\" type=\"application/xml+oembed\" href=\"{$oembed_href}.xml\" title=\"{$oembed_title}\" />";
    return $oembed_headers;
  }
}
