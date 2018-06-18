<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:tei="http://www.tei-c.org/ns/1.0"
  xmlns:xi="http://www.w3.org/2001/XInclude"
  xmlns:teix="http://www.tei-c.org/ns/Examples"
  xmlns:custom="http://whatever"
  >
  <!--<TEI> - Enable for Apparatuses, Essays, Notes, and Glosses. Disable for Anthologies, Manuscripts, and Witnesses.
  The following creates the opening and closing tags of the HTML document (/ matches everything). Note that a <!DOCTYPE> is required for
  compatibilty with Internent Explorer 8.-->
  <xsl:template name="custom:renderWitness">
    <xsl:param name="root"/>

    <xsl:variable name="facsFileNames" select="//tei:teiHeader/tei:fileDesc/tei:sourceDesc/tei:msDesc/tei:msContents/tei:msItem/tei:locus/@facs" />
    <xsl:variable name="witnessTitle" select="//tei:teiHeader/tei:fileDesc/tei:titleStmt/tei:title[@type='main']" />
    <xsl:value-of disable-output-escaping="yes">
&#x003C;?php

define(&#x022;FILE_NAME&#x022;, &#x003C;&#x003C;&#x003C;EOT
<xsl:value-of select="$witnessTitle" disable-output-escaping="no"/>
EOT
);
define(&#x022;FACS_FILE_NAMES&#x022;, &#x003C;&#x003C;&#x003C;EOT
<xsl:value-of select="$facsFileNames" disable-output-escaping="no"/>
EOT
);
      include_once(&#x022;../showcase_top.inc.php&#x022;)
      ?&#x003E;
    </xsl:value-of>

    <div id="content-left">
      <img id="facs_preview" src="" width="100%"/>
      <img id="facs" src="" width="100%" style="display:none"/>
    </div>
    <div id="content-splitter"></div>

    <div id="content-right">


      <div class="backToApparatusLink">
        <xsl:variable name="aVar">
          &#x003C;a href=&#x022;&#x003C;?php echo r_build_url(&#x022;<xsl:value-of select="//tei:teiHeader/tei:fileDesc/tei:sourceDesc/tei:msDesc/tei:msContents/tei:msItem/tei:filiation/tei:ref[1]/@target" />&#x022;); ?&#x003E;&#x022; &#x022;&#x003E;Back to apparatus&#x003C;/a&#x003E;
        </xsl:variable>
        <xsl:value-of select="$aVar" disable-output-escaping="yes" />
        <div class="pb" />
      </div>

      <xsl:for-each select="//tei:TEI">
        <div class="fileName">
          <span><xsl:value-of select="./tei:teiHeader/tei:fileDesc/tei:titleStmt/tei:title[@type='main']" /></span>
        </div>

        <xsl:apply-templates select=".//tei:body/*"/>
        <xsl:call-template name="tei:pb" />
      </xsl:for-each>
    </div>
    <xsl:value-of disable-output-escaping="yes" select="'&#x003C;?php include_once(&#x022;../showcase_bottom.inc.php&#x022;) ?&#x003E;'" />

</xsl:template>

  <xsl:template match="/">
    <!-- <xsl:value-of select="tei:TEI" />
    Node -->
    <xsl:choose>
      <xsl:when test="tei:teiCorpus">
        <xsl:call-template name="custom:renderWitness">
          <xsl:with-param name="root" select = "." />
        </xsl:call-template>
      </xsl:when>
      <xsl:otherwise>
        <xsl:choose>
          <xsl:when test="tei:TEI/tei:teiHeader[@type='witness']">
            <xsl:call-template name="custom:renderWitness">
              <xsl:with-param name="root" select = "tei:TEI" />
            </xsl:call-template>

          </xsl:when>
          <xsl:otherwise>
            <!--The <!DOCTYPE> below matches the default assigned by Adobe Dreamweaver CS4 and ensures that webpages created outside the application
            (through XSLT) match those created inside.-->
            <xsl:variable name="docVar">&#x003C;!DOCTYPE html PUBLIC &#x0022;-//W3C//DTD XHTML 1.0 Transitional//EN&#x0022; &#x0022;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&#x0022;&#x003E;</xsl:variable>
            <xsl:variable name="headerIncludeVar">&#x003C;?php include_once(&#x022;../header.inc.php&#x022;) ?&#x003E;
            </xsl:variable>
            <xsl:value-of select="$headerIncludeVar" disable-output-escaping="yes"/>
            <xsl:value-of select="$docVar" disable-output-escaping="yes"/>
            <html>
              <xsl:apply-templates/>
            </html>
          </xsl:otherwise>
        </xsl:choose>
      </xsl:otherwise>
    </xsl:choose>

  </xsl:template>

  <!--<teiHeader> - Enable for Apparatuses, Essays, Notes, and Glosses. Disable for Anthologies, Manuscripts, and Witnesses.
  The following extracts from the XML document the content of the <teiHeader>'s main <title> for the HTML document's title. All other header
  elements in the XML document are ignored.-->

  <xsl:template match="tei:teiHeader">
    <head>

      <xsl:for-each select="tei:fileDesc/tei:titleStmt/tei:title[@type='main']">
        <title>
          <xsl:apply-templates/>
        </title>

        <xsl:variable name="phpVar">
          &#x003C;?php include(&#x022;../inactive.inc.php&#x022;); ?&#x003E;
        </xsl:variable>

        <xsl:value-of select="$phpVar" disable-output-escaping="yes"/>

      </xsl:for-each>

      <!--The following associates the appropriate CSS with the HTML document based upon the <teiHeader>'s @type in XML.-->

      <xsl:choose>

        <xsl:when test="self::*[@type='anthology' or @type='manuscript' or @type='witness']">
          <xsl:variable name="cssVar">
            &#x003C;link href=&#x022;&#x003C;?php echo r_build_url(&#x022;css/witness_styles.css&#x022;); ?&#x003E;&#x022; rel=&#x022;stylesheet&#x022; type=&#x022;text/css&#x022;&#x003E;
          </xsl:variable>
          <xsl:value-of select="$cssVar" disable-output-escaping="yes"/>

        </xsl:when>

        <xsl:otherwise>
          <!--Remove the ../ in ../styles.css for local testing.-->
          <xsl:variable name="cssVar">
            &#x003C;link href=&#x022;&#x003C;?php echo r_build_url(&#x022;css/styles.css&#x022;); ?&#x003E;&#x022; rel=&#x022;stylesheet&#x022; type=&#x022;text/css&#x022;&#x003E;

          </xsl:variable>
          <xsl:value-of select="$cssVar" disable-output-escaping="yes"/>
        </xsl:otherwise>

      </xsl:choose>

    </head>
  </xsl:template>

  <!--<body> - Enable for Apparatuses, Essays, Notes, and Glosses. Disable for Anthologies, Manuscripts, and Witnesses.
  The following uses the body of the XML docment as the body of the HTML document.-->
  <xsl:template match="tei:body">
    <xsl:choose>

      <xsl:when test="ancestor::*[tei:floatingText]">
        <body>
          <div class="floating-text">
            <xsl:apply-templates/>
          </div>
        </body>
      </xsl:when>
      <xsl:when test="ancestor::*[tei:teiHeader/@type='apparatus']">
        <body>

          <xsl:value-of select="$navigationPhpVar" disable-output-escaping="yes"/>
          <xsl:apply-templates/>
          <xsl:value-of select="$topBtnPhpVar" disable-output-escaping="yes"/>
        </body>
      </xsl:when>

      <xsl:otherwise>
        <xsl:variable name="phpVar">&#x003C;?php include(&#x022;../navigation.inc.php&#x022;); ?&#x003E;</xsl:variable>
        <xsl:value-of select="$navigationPhpVar" disable-output-escaping="yes"/>
        <xsl:apply-templates/>
      </xsl:otherwise>

    </xsl:choose>
  </xsl:template>
</xsl:stylesheet>
