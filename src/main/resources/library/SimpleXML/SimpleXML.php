<?php

// Start of SimpleXML v.0.1
use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;
use JetBrains\PhpStorm\Internal\TentativeType;
use JetBrains\PhpStorm\Pure;

/**
 * Represents an element in an XML document.
 * @link https://php.net/manual/en/class.simplexmlelement.php
 */
class SimpleXMLElement implements Traversable, ArrayAccess, Countable, Iterator, Stringable, RecursiveIterator
{
    /**
     * Creates a new SimpleXMLElement object
     * @link https://php.net/manual/en/simplexmlelement.construct.php
     * @param string $data A well-formed XML string or the path or URL to an XML document if data_is_url is TRUE.
     * @param int $options Optionally used to specify additional Libxml parameters.
     * @param bool $dataIsURL By default, data_is_url is FALSE.
     * Use TRUE to specify that data is a path or URL to an XML document instead of string data.
     * @param string $namespaceOrPrefix Namespace prefix or URI.
     * @param bool $isPrefix TRUE if ns is a prefix, FALSE if it's a URI; defaults to FALSE.
     * @throws Exception if the XML data could not be parsed.
     * @since 5.0.1
     */
    #[Pure]
    public function __construct(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $data,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $options = 0,
        #[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $dataIsURL = false,
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $namespaceOrPrefix = "",
        #[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $isPrefix = false
    ) {}

    /**
     * Provides access to element's children
     * private Method not callable directly, stub exists for typehint only
     * @param string $name child name
     * @return static
     */
    private function __get($name) {}

    /**
     * Return a well-formed XML string based on SimpleXML element
     * @link https://php.net/manual/en/simplexmlelement.asxml.php
     * @param string $filename [optional] <p>
     * If specified, the function writes the data to the file rather than
     * returning it.
     * </p>
     * @return string|bool If the <i>filename</i> isn't specified, this function
     * returns a string on success and <b>FALSE</b> on error. If the
     * parameter is specified, it returns <b>TRUE</b> if the file was written
     * successfully and <b>FALSE</b> otherwise.
     * @since 5.0.1
     */
    #[TentativeType]
    public function asXML(#[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $filename = null): string|bool {}

    /**
     * Alias of <b>SimpleXMLElement::asXML</b>
     * Return a well-formed XML string based on SimpleXML element
     * @link https://php.net/manual/en/simplexmlelement.savexml.php
     * @param string $filename [optional] <p>
     * If specified, the function writes the data to the file rather than
     * returning it.
     * </p>
     * @return string|bool If the <i>filename</i> isn't specified, this function
     * returns a string on success and false on error. If the
     * parameter is specified, it returns true if the file was written
     * successfully and false otherwise.
     */
    #[TentativeType]
    public function saveXML(#[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $filename = null): string|bool {}

    /**
     * Runs XPath query on XML data
     * @link https://php.net/manual/en/simplexmlelement.xpath.php
     * @param string $expression <p>
     * An XPath path
     * </p>
     * @return static[]|false|null an array of SimpleXMLElement objects or <b>FALSE</b> in
     * case of an error.
     */
    #[TentativeType]
    public function xpath(#[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $expression): array|false|null {}

    /**
     * Creates a prefix/ns context for the next XPath query
     * @link https://php.net/manual/en/simplexmlelement.registerxpathnamespace.php
     * @param string $prefix <p>
     * The namespace prefix to use in the XPath query for the namespace given in
     * <i>ns</i>.
     * </p>
     * @param string $namespace <p>
     * The namespace to use for the XPath query. This must match a namespace in
     * use by the XML document or the XPath query using
     * <i>prefix</i> will not return any results.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function registerXPathNamespace(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $prefix,
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $namespace
    ): bool {}

    /**
     * Identifies an element's attributes
     * @link https://php.net/manual/en/simplexmlelement.attributes.php
     * @param string $namespaceOrPrefix [optional] <p>
     * An optional namespace for the retrieved attributes
     * </p>
     * @param bool $isPrefix [optional] <p>
     * Default to <b>FALSE</b>
     * </p>
     * @return static|null a <b>SimpleXMLElement</b> object that can be
     * iterated over to loop through the attributes on the tag.
     * </p>
     * <p>
     * Returns <b>NULL</b> if called on a <b>SimpleXMLElement</b>
     * object that already represents an attribute and not a tag.
     * @since 5.0.1
     */
    #[TentativeType]
    public function attributes(
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $namespaceOrPrefix = null,
        #[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $isPrefix = false
    ): ?static {}

    /**
     * Finds children of given node
     * @link https://php.net/manual/en/simplexmlelement.children.php
     * @param string $namespaceOrPrefix [optional] <p>
     * An XML namespace.
     * </p>
     * @param bool $isPrefix [optional] <p>
     * If <i>is_prefix</i> is <b>TRUE</b>,
     * <i>ns</i> will be regarded as a prefix. If <b>FALSE</b>,
     * <i>ns</i> will be regarded as a namespace
     * URL.
     * </p>
     * @return static|null a <b>SimpleXMLElement</b> element, whether the node
     * has children or not.
     * @since 5.0.1
     */
    #[Pure]
    #[TentativeType]
    public function children(
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $namespaceOrPrefix = null,
        #[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $isPrefix = false
    ): ?static {}

    /**
     * Returns namespaces used in document
     * @link https://php.net/manual/en/simplexmlelement.getnamespaces.php
     * @param bool $recursive [optional] <p>
     * If specified, returns all namespaces used in parent and child nodes.
     * Otherwise, returns only namespaces used in root node.
     * </p>
     * @return array The getNamespaces method returns an array of
     * namespace names with their associated URIs.
     * @since 5.1.2
     */
    #[Pure]
    #[TentativeType]
    public function getNamespaces(#[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $recursive = false): array {}

    /**
     * Returns namespaces declared in document
     * @link https://php.net/manual/en/simplexmlelement.getdocnamespaces.php
     * @param bool $recursive [optional] <p>
     * If specified, returns all namespaces declared in parent and child nodes.
     * Otherwise, returns only namespaces declared in root node.
     * </p>
     * @param bool $fromRoot [optional] <p>
     * Allows you to recursively check namespaces under a child node instead of
     * from the root of the XML doc.
     * </p>
     * @return array The getDocNamespaces method returns an array
     * of namespace names with their associated URIs.
     * @since 5.1.2
     */
    #[Pure]
    #[TentativeType]
    public function getDocNamespaces(
        #[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $recursive = false,
        #[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $fromRoot = true
    ): array|false {}

    /**
     * Gets the name of the XML element
     * @link https://php.net/manual/en/simplexmlelement.getname.php
     * @return string The getName method returns as a string the
     * name of the XML tag referenced by the SimpleXMLElement object.
     * @since 5.1.3
     */
    #[Pure]
    #[TentativeType]
    public function getName(): string {}

    /**
     * Adds a child element to the XML node
     * @link https://php.net/manual/en/simplexmlelement.addchild.php
     * @param string $qualifiedName <p>
     * The name of the child element to add.
     * </p>
     * @param string $value [optional] <p>
     * If specified, the value of the child element.
     * </p>
     * @param string $namespace [optional] <p>
     * If specified, the namespace to which the child element belongs.
     * </p>
     * @return static|null The addChild method returns a SimpleXMLElement
     * object representing the child added to the XML node.
     * @since 5.1.3
     */
    #[TentativeType]
    public function addChild(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $qualifiedName,
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $value = null,
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $namespace = null
    ): ?static {}

    /**
     * Adds an attribute to the SimpleXML element
     * @link https://php.net/manual/en/simplexmlelement.addattribute.php
     * @param string $qualifiedName <p>
     * The name of the attribute to add.
     * </p>
     * @param string $value <p>
     * The value of the attribute.
     * </p>
     * @param string $namespace [optional] <p>
     * If specified, the namespace to which the attribute belongs.
     * </p>
     * @return void No value is returned.
     * @since 5.1.3
     */
    #[TentativeType]
    public function addAttribute(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $qualifiedName,
        #[PhpStormStubsElementAvailable(from: '5.3', to: '7.4')] $value = null,
        #[PhpStormStubsElementAvailable(from: '8.0')] string $value,
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $namespace = null
    ): void {}

    /**
     * Returns the string content
     * @link https://php.net/manual/en/simplexmlelement.tostring.php
     * @return string the string content on success or an empty string on failure.
     * @since 5.3
     */
    #[TentativeType]
    public function __toString(): string {}

    /**
     * Counts the children of an element
     * @link https://php.net/manual/en/simplexmlelement.count.php
     * @return int<0,max> the number of elements of an element.
     */
    #[Pure]
    #[TentativeType]
    public function count(): int {}

    /**
     * Class provides access to children by position, and attributes by name
     * private Method not callable directly, stub exists for typehint only
     * @param string|int $offset
     * @return bool true on success or false on failure.
     */
    #[Pure]
    public function offsetExists($offset) {}

    /**
     * Class provides access to children by position, and attributes by name
     * private Method not callable directly, stub exists for typehint only
     * @param string|int $offset
     * @return static Either a named attribute or an element from a list of children
     */
    #[Pure]
    public function offsetGet($offset) {}

    /**
     * Class provides access to children by position, and attributes by name
     * private Method not callable directly, stub exists for typehint only
     * @param string|int $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value) {}

    /**
     * Class provides access to children by position, and attributes by name
     * private Method not callable directly, stub exists for typehint only
     * @param string|int $offset
     * @return void
     */
    public function offsetUnset($offset) {}

    /**
     * Rewind to the first element
     * @link https://php.net/manual/en/simplexmliterator.rewind.php
     * @return void No value is returned.
     */
    #[TentativeType]
    public function rewind(): void {}

    /**
     * Check whether the current element is valid
     * @link https://php.net/manual/en/simplexmliterator.valid.php
     * @return bool <b>TRUE</b> if the current element is valid, otherwise <b>FALSE</b>
     */
    #[Pure]
    #[TentativeType]
    public function valid(): bool {}

    /**
     * Returns the current element
     * @link https://php.net/manual/en/simplexmliterator.current.php
     * @return static|null the current element as a <b>SimpleXMLElement</b> object or <b>NULL</b> on failure.
     */
    #[Pure]
    #[TentativeType]
    public function current(): ?static {}

    /**
     * Return current key
     * @link https://php.net/manual/en/simplexmliterator.key.php
     * @return string|false the XML tag name of the element referenced by the current <b>SimpleXMLIterator</b> object
     */
    #[TentativeType]
    #[LanguageLevelTypeAware(['8.0' => 'string'], default: 'string|false')]
    public function key() {}

    /**
     * Move to next element
     * @link https://php.net/manual/en/simplexmliterator.next.php
     * @return void No value is returned.
     */
    #[TentativeType]
    public function next(): void {}

    /**
     * @return bool
     * @since 8.0
     */
    #[Pure]
    #[TentativeType]
    public function hasChildren(): bool {}

    /**
     * @since 8.0
     */
    #[Pure]
    #[TentativeType]
    public function getChildren(): ?SimpleXMLElement {}
}

/**
 * The SimpleXMLIterator provides recursive iteration over all nodes of a <b>SimpleXMLElement</b> object.
 * @link https://php.net/manual/en/class.simplexmliterator.php
 */
class SimpleXMLIterator extends SimpleXMLElement implements RecursiveIterator, Countable, Stringable
{
    /**
     * Rewind to the first element
     * @link https://php.net/manual/en/simplexmliterator.rewind.php
     * @return void No value is returned.
     */
    public function rewind() {}

    /**
     * Check whether the current element is valid
     * @link https://php.net/manual/en/simplexmliterator.valid.php
     * @return bool <b>TRUE</b> if the current element is valid, otherwise <b>FALSE</b>
     */
    #[Pure]
    public function valid() {}

    /**
     * Returns the current element
     * @link https://php.net/manual/en/simplexmliterator.current.php
     * @return static|null the current element as a <b>SimpleXMLIterator</b> object or <b>NULL</b> on failure.
     */
    #[Pure]
    public function current() {}

    /**
     * Return current key
     * @link https://php.net/manual/en/simplexmliterator.key.php
     * @return string|false the XML tag name of the element referenced by the current <b>SimpleXMLIterator</b> object or <b>FALSE</b>
     */
    public function key() {}

    /**
     * Move to next element
     * @link https://php.net/manual/en/simplexmliterator.next.php
     * @return void No value is returned.
     */
    public function next() {}

    /**
     * Checks whether the current element has sub elements.
     * @link https://php.net/manual/en/simplexmliterator.haschildren.php
     * @return bool <b>TRUE</b> if the current element has sub-elements, otherwise <b>FALSE</b>
     */
    #[Pure]
    public function hasChildren() {}

    /**
     * Returns the sub-elements of the current element
     * @link https://php.net/manual/en/simplexmliterator.getchildren.php
     * @return SimpleXMLIterator a <b>SimpleXMLIterator</b> object containing
     * the sub-elements of the current element.
     */
    #[Pure]
    public function getChildren() {}

    /**
     * Returns the string content
     * @link https://php.net/manual/en/simplexmlelement.tostring.php
     * @return string the string content on success or an empty string on failure.
     * @since 5.3
     */
    public function __toString() {}

    /**
     * Counts the children of an element
     * @link https://php.net/manual/en/simplexmlelement.count.php
     * @return int the number of elements of an element.
     */
    #[Pure]
    public function count() {}
}

/**
 * <div id="function.simplexml-load-file" class="refentry"> <div class="refnamediv">  <h1 class="refname">simplexml_load_file</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">simplexml_load_file</span> — <span class="dc-title">   Interprets an XML file into an object  </span></p> </div> <div class="refsect1 description" id="refsect1-function.simplexml-load-file-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>simplexml_load_file</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$class_name</span><span class="initializer"> = SimpleXMLElement::class</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$options</span><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$namespace_or_prefix</span><span class="initializer"> = ""</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$is_prefix</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.simplexmlelement.php" class="type SimpleXMLElement" style="color:#EAB766">SimpleXMLElement</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Convert the well-formed XML document in the given file to an object.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.simplexml-load-file-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>     <dd>      <p class="para">       Path to the XML file      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">class_name</span></dt>     <dd>      <p class="para">       You may use this optional parameter so that       <span class="function"><strong>simplexml_load_file()</strong></span> will return an object of        the specified class. That class should extend the        <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.simplexmlelement.php" class="type SimpleXMLElement" style="color:#EAB766">SimpleXMLElement</a></span> class.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">options</span></dt>     <dd>      <p class="para">  <a href="https://php.net/manual/zh/language.operators.bitwise.php" class="link">Bitwise <span class="literal">OR</span></a>  of the <a href="https://php.net/manual/zh/libxml.constants.php" class="link">libxml option constants</a>.</p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">namespace_or_prefix</span></dt>     <dd>      <p class="para">       Namespace prefix or URI.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">is_prefix</span></dt>     <dd>      <p class="para">       <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if <span class="parameter" style="color:#3A95FF">namespace_or_prefix</span> is a prefix, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if it's a URI;       defaults to <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.simplexml-load-file-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.object.php" class="type object" style="color:#EAB766">object</a></span> of class <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.simplexmlelement.php" class="type SimpleXMLElement" style="color:#EAB766">SimpleXMLElement</a></span> with   properties containing the data held within the XML document, 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数可能返回布尔值<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，但也可能返回等同于 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 的非布尔值。请阅读 <a href="https://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用<a href="https://php.net/manual/zh/language.operators.comparison.php" class="link">===运算符</a>来测试此函数的返回值。</p></div> </div> <div class="refsect1 errors" id="refsect1-function.simplexml-load-file-errors">  <h3 class="title">错误／异常</h3>  <p class="para">   Produces an <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-warning">E_WARNING</a></span></strong> error message for each error   found in the XML data.  </p>  <div class="tip"><strong class="tip">小技巧</strong>   <p class="para">    Use <span class="function">{@link libxml_use_internal_errors()}</span> to suppress all XML    errors, and <span class="function">{@link libxml_get_errors()}</span> to iterate over them    afterwards.   </p>  </div> </div> <div class="refsect1 examples" id="refsect1-function.simplexml-load-file-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-5873">    <p><strong>示例 #1 Interpret an XML document</strong></p>    <div class="example-contents"><div class="annotation-interactive phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// The file examples/book.xml contains an XML document with a root element<br>// and at least an element /[root]/title.<br><br></span><span style="color: #007700">if (</span><span style="color: #9876AA">file_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'examples/book.xml'</span><span style="color: #007700">)) {<br>    </span><span style="color: #9876AA">\$xml </span><span style="color: #007700">= </span><span style="color: #9876AA">simplexml_load_file</span><span style="color: #007700">(</span><span style="color: #DD0000">'examples/book.xml'</span><span style="color: #007700">);<br> <br>    </span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">\$xml</span><span style="color: #007700">);<br>} else {<br>    exit(</span><span style="color: #DD0000">'Failed to open examples/book.xml.'</span><span style="color: #007700">);<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>     This script will display, on success:    </p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="annotation-interactive examplescode"><blockquote style="border:1px gray solid;">SimpleXMLElement&nbsp;Object<br>(<br>&nbsp;&nbsp;[book]&nbsp;=&gt;&nbsp;Array<br>&nbsp;&nbsp;...<br>)</blockquote></div>    </div>    <div class="example-contents"><p>     At this point, you can go about using <span class="literal">\$xml-&gt;title</span>     and any other elements.    </p></div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.simplexml-load-file-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link simplexml_load_string()} - Interprets a string of XML into an object</span></li>    <li><span class="methodname" style="color:#CC7832">{@link SimpleXMLElement::__construct()} - Creates a new SimpleXMLElement object</span></li>    <li><a href="https://php.net/manual/zh/simplexml.examples-errors.php" class="xref">Dealing with XML errors</a></li>    <li><span class="function">{@link libxml_use_internal_errors()} - Disable libxml errors and allow user to fetch error information as needed</span></li>    <li><a href="https://php.net/manual/zh/simplexml.examples-basic.php" class="xref">Basic SimpleXML usage</a></li>    <li><span class="function">{@link libxml_set_streams_context()} - Set the streams context for the next libxml document load or write</span></li>   </ul>   </div></div>
 * 
 * Interprets an XML file into an object
 * @link https://php.net/manual/zh/function.simplexml-load-file.php
 * @param string $filename <p>
 * Path to the XML file
 * </p>
 * <p>
 * Libxml 2 unescapes the URI, so if you want to pass e.g.
 * b&c as the URI parameter a,
 * you have to call
 * simplexml_load_file(rawurlencode('https://example.com/?a=' .
 * urlencode('b&c'))). Since PHP 5.1.0 you don't need to do
 * this because PHP will do it for you.
 * </p>
 * @param string|null $class_name [optional] <p>
 * You may use this optional parameter so that
 * <b>simplexml_load_file</b> will return an object of
 * the specified class. That class should extend the
 * SimpleXMLElement class.
 * </p>
 * @param int $options [optional] <p>
 * Since PHP 5.1.0 and Libxml 2.6.0, you may also use the
 * <i>options</i> parameter to specify additional Libxml parameters.
 * </p>
 * @param string $namespace_or_prefix [optional] <p>
 * Namespace prefix or URI.
 * </p>
 * @param bool $is_prefix [optional] <p>
 * <b>TRUE</b> if <i>ns</i> is a prefix, <b>FALSE</b> if it's a URI;
 * defaults to <b>FALSE</b>.
 * </p>
 * @return SimpleXMLElement|false an object of class SimpleXMLElement with
 * properties containing the data held within the XML document, or <b>FALSE</b> on failure.
 */
function simplexml_load_file(string $filename, ?string $class_name = "SimpleXMLElement", int $options = 0, string $namespace_or_prefix = "", bool $is_prefix = false): SimpleXMLElement|false {}

/**
 * <div id="function.simplexml-load-string" class="refentry"> <div class="refnamediv">  <h1 class="refname">simplexml_load_string</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">simplexml_load_string</span> — <span class="dc-title">   Interprets a string of XML into an object  </span></p> </div> <div class="refsect1 description" id="refsect1-function.simplexml-load-string-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>simplexml_load_string</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$data</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$class_name</span><span class="initializer"> = SimpleXMLElement::class</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$options</span><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$namespace_or_prefix</span><span class="initializer"> = ""</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$is_prefix</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.simplexmlelement.php" class="type SimpleXMLElement" style="color:#EAB766">SimpleXMLElement</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Takes a well-formed XML string and returns it as an object.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.simplexml-load-string-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">data</span></dt>     <dd>      <p class="para">       A well-formed XML string      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">class_name</span></dt>     <dd>      <p class="para">       You may use this optional parameter so that       <span class="function"><strong>simplexml_load_string()</strong></span> will return an object of        the specified class. That class should extend the        <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.simplexmlelement.php" class="type SimpleXMLElement" style="color:#EAB766">SimpleXMLElement</a></span> class.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">options</span></dt>     <dd>      <p class="para">  <a href="https://php.net/manual/zh/language.operators.bitwise.php" class="link">Bitwise <span class="literal">OR</span></a>  of the <a href="https://php.net/manual/zh/libxml.constants.php" class="link">libxml option constants</a>.</p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">namespace_or_prefix</span></dt>     <dd>      <p class="para">       Namespace prefix or URI.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">is_prefix</span></dt>     <dd>      <p class="para">       <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if <span class="parameter" style="color:#3A95FF">namespace_or_prefix</span> is a prefix, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if it's a URI;       defaults to <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.simplexml-load-string-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.object.php" class="type object" style="color:#EAB766">object</a></span> of class <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.simplexmlelement.php" class="type SimpleXMLElement" style="color:#EAB766">SimpleXMLElement</a></span> with   properties containing the data held within the xml document, 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数可能返回布尔值<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，但也可能返回等同于 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 的非布尔值。请阅读 <a href="https://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用<a href="https://php.net/manual/zh/language.operators.comparison.php" class="link">===运算符</a>来测试此函数的返回值。</p></div> </div> <div class="refsect1 errors" id="refsect1-function.simplexml-load-string-errors">  <h3 class="title">错误／异常</h3>  <p class="para">   Produces an <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-warning">E_WARNING</a></span></strong> error message for each error   found in the XML data.  </p>  <div class="tip"><strong class="tip">小技巧</strong>   <p class="para">    Use <span class="function">{@link libxml_use_internal_errors()}</span> to suppress all XML    errors, and <span class="function">{@link libxml_get_errors()}</span> to iterate over them    afterwards.   </p>  </div> </div> <div class="refsect1 examples" id="refsect1-function.simplexml-load-string-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-5874">    <p><strong>示例 #1 Interpret an XML string</strong></p>    <div class="example-contents"><div class="annotation-interactive phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$string </span><span style="color: #007700">= &lt;&lt;&lt;XML<br></span><span style="color: #DD0000">&lt;?xml version='1.0'?&gt; <br>&lt;document&gt;<br> &lt;title&gt;Forty What?&lt;/title&gt;<br> &lt;from&gt;Joe&lt;/from&gt;<br> &lt;to&gt;Jane&lt;/to&gt;<br> &lt;body&gt;<br>  I know that's the answer -- but what's the question?<br> &lt;/body&gt;<br>&lt;/document&gt;<br></span><span style="color: #007700">XML;<br><br></span><span style="color: #9876AA">\$xml </span><span style="color: #007700">= </span><span style="color: #9876AA">simplexml_load_string</span><span style="color: #007700">(</span><span style="color: #9876AA">\$string</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">\$xml</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="annotation-interactive examplescode"><blockquote style="border:1px gray solid;">SimpleXMLElement&nbsp;Object<br>(<br>&nbsp;&nbsp;[title]&nbsp;=&gt;&nbsp;Forty&nbsp;What?<br>&nbsp;&nbsp;[from]&nbsp;=&gt;&nbsp;Joe<br>&nbsp;&nbsp;[to]&nbsp;=&gt;&nbsp;Jane<br>&nbsp;&nbsp;[body]&nbsp;=&gt;<br>&nbsp;&nbsp;&nbsp;I&nbsp;know&nbsp;that's&nbsp;the&nbsp;answer&nbsp;--&nbsp;but&nbsp;what's&nbsp;the&nbsp;question?<br>)</blockquote></div>    </div>    <div class="example-contents"><p>     At this point, you can go about using <span class="literal">\$xml-&gt;body</span>     and such.    </p></div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.simplexml-load-string-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link simplexml_load_file()} - Interprets an XML file into an object</span></li>    <li><span class="methodname" style="color:#CC7832">{@link SimpleXMLElement::__construct()} - Creates a new SimpleXMLElement object</span></li>    <li><a href="https://php.net/manual/zh/simplexml.examples-errors.php" class="xref">Dealing with XML errors</a></li>    <li><span class="function">{@link libxml_use_internal_errors()} - Disable libxml errors and allow user to fetch error information as needed</span></li>    <li><a href="https://php.net/manual/zh/simplexml.examples-basic.php" class="xref">Basic SimpleXML usage</a></li>   </ul>   </div></div>
 * 
 * Interprets a string of XML into an object
 * @link https://php.net/manual/zh/function.simplexml-load-string.php
 * @param string $data <p>
 * A well-formed XML string
 * </p>
 * @param string|null $class_name [optional] <p>
 * You may use this optional parameter so that
 * <b>simplexml_load_string</b> will return an object of
 * the specified class. That class should extend the
 * SimpleXMLElement class.
 * </p>
 * @param int $options [optional] <p>
 * Since PHP 5.1.0 and Libxml 2.6.0, you may also use the
 * <i>options</i> parameter to specify additional Libxml parameters.
 * </p>
 * @param string $namespace_or_prefix [optional] <p>
 * Namespace prefix or URI.
 * </p>
 * @param bool $is_prefix [optional] <p>
 * <b>TRUE</b> if <i>ns</i> is a prefix, <b>FALSE</b> if it's a URI;
 * defaults to <b>FALSE</b>.
 * </p>
 * @return SimpleXMLElement|false an object of class SimpleXMLElement with
 * properties containing the data held within the xml document, or <b>FALSE</b> on failure.
 */
function simplexml_load_string(string $data, ?string $class_name = "SimpleXMLElement", int $options = 0, string $namespace_or_prefix = "", bool $is_prefix = false): SimpleXMLElement|false {}

/**
 * <div id="function.simplexml-import-dom" class="refentry"> <div class="refnamediv">  <h1 class="refname">simplexml_import_dom</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">simplexml_import_dom</span> — <span class="dc-title">Get a <span class="literal">SimpleXMLElement</span> object from an XML or HTML node</span></p> </div> <div class="refsect1 description" id="refsect1-function.simplexml-import-dom-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>simplexml_import_dom</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.object.php" class="type object" style="color:#EAB766">object</a></span> <span class="parameter" style="color:#3A95FF">\$node</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$class_name</span><span class="initializer"> = SimpleXMLElement::class</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.simplexmlelement.php" class="type SimpleXMLElement" style="color:#EAB766">SimpleXMLElement</a></span></span></div>  <p class="para rdfs-comment">   This function takes a node of a <a href="https://php.net/manual/zh/book.dom.php" class="link">DOM</a>   document and makes it into a SimpleXML node. This new object can   then be used as a native SimpleXML element.   </p> </div> <div class="refsect1 parameters" id="refsect1-function.simplexml-import-dom-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">node</span></dt>     <dd>      <p class="para">       A <a href="https://php.net/manual/zh/book.dom.php" class="link">DOM</a> Element node      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">class_name</span></dt>     <dd>      <p class="para">       You may use this optional parameter so that       <span class="function"><strong>simplexml_import_dom()</strong></span> will return an object of        the specified class. That class should extend the        <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.simplexmlelement.php" class="type SimpleXMLElement" style="color:#EAB766">SimpleXMLElement</a></span> class.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.simplexml-import-dom-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.simplexmlelement.php" class="type SimpleXMLElement" style="color:#EAB766">SimpleXMLElement</a></span> or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> on failure.  </p> </div> <div class="refsect1 errors" id="refsect1-function.simplexml-import-dom-errors">  <h3 class="title">错误／异常</h3>  <p class="simpara">   Throws a <span class="classname"><a href="https://php.net/manual/zh/class.typeerror.php" class="classname">TypeError</a></span> when passed a   non-XML or non-HTML <span class="parameter" style="color:#3A95FF">node</span>.  </p> </div> <div class="refsect1 changelog" id="refsect1-function.simplexml-import-dom-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.4.0</td>      <td>       Added support for <span class="classname"><a href="https://php.net/manual/zh/class.dom-document.php" class="classname">Dom\Document</a></span>.      </td>     </tr>     <tr>      <td>8.4.0</td>      <td>       This function now throws a <span class="classname"><a href="https://php.net/manual/zh/class.typeerror.php" class="classname">TypeError</a></span> instead of       a <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span> when passed a       non-XML or non-HTML <span class="parameter" style="color:#3A95FF">node</span>.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.simplexml-import-dom-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-5871">    <p><strong>示例 #1 Importing a <span class="classname"><a href="https://php.net/manual/zh/class.domdocument.php" class="classname">DOMDocument</a></span></strong></p>    <div class="example-contents"><div class="annotation-interactive phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$dom </span><span style="color: #007700">= new </span><span style="color: #9876AA">DOMDocument</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$dom</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">loadXML</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;books&gt;&lt;book&gt;&lt;title&gt;blah&lt;/title&gt;&lt;/book&gt;&lt;/books&gt;'</span><span style="color: #007700">);<br>if (!</span><span style="color: #9876AA">\$dom</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">'Error while parsing the document'</span><span style="color: #007700">;<br>    exit;<br>}<br><br></span><span style="color: #9876AA">\$s </span><span style="color: #007700">= </span><span style="color: #9876AA">simplexml_import_dom</span><span style="color: #007700">(</span><span style="color: #9876AA">\$dom</span><span style="color: #007700">);<br><br>echo </span><span style="color: #9876AA">\$s</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">book</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]-&gt;</span><span style="color: #9876AA">title</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="annotation-interactive examplescode"><blockquote style="border:1px gray solid;">blah</blockquote></div>    </div>   </div>   <div class="example" id="example-5872">    <p><strong>示例 #2 Importing a <span class="classname"><a href="https://php.net/manual/zh/class.dom-document.php" class="classname">Dom\Document</a></span></strong></p>    <div class="example-contents"><div class="annotation-interactive phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$dom </span><span style="color: #007700">= </span><span style="color: #9876AA">Dom\XMLDocument</span><span style="color: #007700">::</span><span style="color: #9876AA">createFromString</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;books&gt;&lt;book&gt;&lt;title&gt;blah&lt;/title&gt;&lt;/book&gt;&lt;/books&gt;'</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$s </span><span style="color: #007700">= </span><span style="color: #9876AA">simplexml_import_dom</span><span style="color: #007700">(</span><span style="color: #9876AA">\$dom</span><span style="color: #007700">);<br><br>echo </span><span style="color: #9876AA">\$s</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">book</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]-&gt;</span><span style="color: #9876AA">title</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="annotation-interactive examplescode"><blockquote style="border:1px gray solid;">blah</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.simplexml-import-dom-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link dom_import_simplexml()} - Gets a DOMAttr or DOMElement object from a   SimpleXMLElement object</span></li>    <li><a href="https://php.net/manual/zh/simplexml.examples-basic.php" class="xref">Basic SimpleXML usage</a></li>   </ul>   </div></div>
 * 
 * Get a SimpleXMLElement object from a DOM node.
 * @link https://php.net/manual/zh/function.simplexml-import-dom.php
 * @param SimpleXMLElement|DOMNode $node <p>
 * A DOM Element node
 * </p>
 * @param string|null $class_name [optional] <p>
 * You may use this optional parameter so that
 * <b>simplexml_import_dom</b> will return an object of
 * the specified class. That class should extend the
 * SimpleXMLElement class.
 * </p>
 * @return SimpleXMLElement|null a SimpleXMLElement or <b>FALSE</b> on failure.
 */
function simplexml_import_dom(#[LanguageLevelTypeAware(['8.4' => 'object'], default: 'SimpleXMLElement|DOMNode')] $node, ?string $class_name = "SimpleXMLElement"): ?SimpleXMLElement {}

// End of SimpleXML v.0.1
