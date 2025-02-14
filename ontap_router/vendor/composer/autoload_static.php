<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85bbd31dfad586de68f2df71adce1454
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Contributte\\Bootstrap\\' => 22,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Contributte\\Bootstrap\\' => 
        array (
            0 => __DIR__ . '/..' . '/contributte/bootstrap/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Nette\\ArgumentOutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Bootstrap\\Configurator' => __DIR__ . '/..' . '/nette/bootstrap/src/Bootstrap/Configurator.php',
        'Nette\\Bootstrap\\Extensions\\ConstantsExtension' => __DIR__ . '/..' . '/nette/bootstrap/src/Bootstrap/Extensions/ConstantsExtension.php',
        'Nette\\Bootstrap\\Extensions\\PhpExtension' => __DIR__ . '/..' . '/nette/bootstrap/src/Bootstrap/Extensions/PhpExtension.php',
        'Nette\\Bridges\\DITracy\\ContainerPanel' => __DIR__ . '/..' . '/nette/di/src/Bridges/DITracy/ContainerPanel.php',
        'Nette\\Configurator' => __DIR__ . '/..' . '/nette/bootstrap/src/Configurator.php',
        'Nette\\DI\\Attributes\\Inject' => __DIR__ . '/..' . '/nette/di/src/DI/Attributes/Inject.php',
        'Nette\\DI\\Autowiring' => __DIR__ . '/..' . '/nette/di/src/DI/Autowiring.php',
        'Nette\\DI\\Compiler' => __DIR__ . '/..' . '/nette/di/src/DI/Compiler.php',
        'Nette\\DI\\CompilerExtension' => __DIR__ . '/..' . '/nette/di/src/DI/CompilerExtension.php',
        'Nette\\DI\\Config\\Adapter' => __DIR__ . '/..' . '/nette/di/src/DI/Config/Adapter.php',
        'Nette\\DI\\Config\\Adapters\\NeonAdapter' => __DIR__ . '/..' . '/nette/di/src/DI/Config/Adapters/NeonAdapter.php',
        'Nette\\DI\\Config\\Adapters\\PhpAdapter' => __DIR__ . '/..' . '/nette/di/src/DI/Config/Adapters/PhpAdapter.php',
        'Nette\\DI\\Config\\Helpers' => __DIR__ . '/..' . '/nette/di/src/DI/Config/Helpers.php',
        'Nette\\DI\\Config\\IAdapter' => __DIR__ . '/..' . '/nette/di/src/compatibility.php',
        'Nette\\DI\\Config\\Loader' => __DIR__ . '/..' . '/nette/di/src/DI/Config/Loader.php',
        'Nette\\DI\\Container' => __DIR__ . '/..' . '/nette/di/src/DI/Container.php',
        'Nette\\DI\\ContainerBuilder' => __DIR__ . '/..' . '/nette/di/src/DI/ContainerBuilder.php',
        'Nette\\DI\\ContainerLoader' => __DIR__ . '/..' . '/nette/di/src/DI/ContainerLoader.php',
        'Nette\\DI\\Definitions\\AccessorDefinition' => __DIR__ . '/..' . '/nette/di/src/DI/Definitions/AccessorDefinition.php',
        'Nette\\DI\\Definitions\\Definition' => __DIR__ . '/..' . '/nette/di/src/DI/Definitions/Definition.php',
        'Nette\\DI\\Definitions\\FactoryDefinition' => __DIR__ . '/..' . '/nette/di/src/DI/Definitions/FactoryDefinition.php',
        'Nette\\DI\\Definitions\\ImportedDefinition' => __DIR__ . '/..' . '/nette/di/src/DI/Definitions/ImportedDefinition.php',
        'Nette\\DI\\Definitions\\LocatorDefinition' => __DIR__ . '/..' . '/nette/di/src/DI/Definitions/LocatorDefinition.php',
        'Nette\\DI\\Definitions\\Reference' => __DIR__ . '/..' . '/nette/di/src/DI/Definitions/Reference.php',
        'Nette\\DI\\Definitions\\ServiceDefinition' => __DIR__ . '/..' . '/nette/di/src/DI/Definitions/ServiceDefinition.php',
        'Nette\\DI\\Definitions\\Statement' => __DIR__ . '/..' . '/nette/di/src/DI/Definitions/Statement.php',
        'Nette\\DI\\DependencyChecker' => __DIR__ . '/..' . '/nette/di/src/DI/DependencyChecker.php',
        'Nette\\DI\\DynamicParameter' => __DIR__ . '/..' . '/nette/di/src/DI/DynamicParameter.php',
        'Nette\\DI\\Extensions\\DIExtension' => __DIR__ . '/..' . '/nette/di/src/DI/Extensions/DIExtension.php',
        'Nette\\DI\\Extensions\\DecoratorExtension' => __DIR__ . '/..' . '/nette/di/src/DI/Extensions/DecoratorExtension.php',
        'Nette\\DI\\Extensions\\DefinitionSchema' => __DIR__ . '/..' . '/nette/di/src/DI/Extensions/DefinitionSchema.php',
        'Nette\\DI\\Extensions\\ExtensionsExtension' => __DIR__ . '/..' . '/nette/di/src/DI/Extensions/ExtensionsExtension.php',
        'Nette\\DI\\Extensions\\InjectExtension' => __DIR__ . '/..' . '/nette/di/src/DI/Extensions/InjectExtension.php',
        'Nette\\DI\\Extensions\\ParametersExtension' => __DIR__ . '/..' . '/nette/di/src/DI/Extensions/ParametersExtension.php',
        'Nette\\DI\\Extensions\\SearchExtension' => __DIR__ . '/..' . '/nette/di/src/DI/Extensions/SearchExtension.php',
        'Nette\\DI\\Extensions\\ServicesExtension' => __DIR__ . '/..' . '/nette/di/src/DI/Extensions/ServicesExtension.php',
        'Nette\\DI\\Helpers' => __DIR__ . '/..' . '/nette/di/src/DI/Helpers.php',
        'Nette\\DI\\InvalidConfigurationException' => __DIR__ . '/..' . '/nette/di/src/DI/exceptions.php',
        'Nette\\DI\\MissingServiceException' => __DIR__ . '/..' . '/nette/di/src/DI/exceptions.php',
        'Nette\\DI\\NotAllowedDuringResolvingException' => __DIR__ . '/..' . '/nette/di/src/DI/exceptions.php',
        'Nette\\DI\\PhpGenerator' => __DIR__ . '/..' . '/nette/di/src/DI/PhpGenerator.php',
        'Nette\\DI\\Resolver' => __DIR__ . '/..' . '/nette/di/src/DI/Resolver.php',
        'Nette\\DI\\ServiceCreationException' => __DIR__ . '/..' . '/nette/di/src/DI/exceptions.php',
        'Nette\\DI\\ServiceDefinition' => __DIR__ . '/..' . '/nette/di/src/compatibility.php',
        'Nette\\DI\\Statement' => __DIR__ . '/..' . '/nette/di/src/compatibility.php',
        'Nette\\DeprecatedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\DirectoryNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\FileNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\HtmlStringable' => __DIR__ . '/..' . '/nette/utils/src/HtmlStringable.php',
        'Nette\\IOException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\InvalidArgumentException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\InvalidStateException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Iterators\\CachingIterator' => __DIR__ . '/..' . '/nette/utils/src/Iterators/CachingIterator.php',
        'Nette\\Iterators\\Mapper' => __DIR__ . '/..' . '/nette/utils/src/Iterators/Mapper.php',
        'Nette\\Loaders\\RobotLoader' => __DIR__ . '/..' . '/nette/robot-loader/src/RobotLoader/RobotLoader.php',
        'Nette\\Localization\\ITranslator' => __DIR__ . '/..' . '/nette/utils/src/compatibility.php',
        'Nette\\Localization\\Translator' => __DIR__ . '/..' . '/nette/utils/src/Translator.php',
        'Nette\\MemberAccessException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Neon\\Decoder' => __DIR__ . '/..' . '/nette/neon/src/Neon/Decoder.php',
        'Nette\\Neon\\Encoder' => __DIR__ . '/..' . '/nette/neon/src/Neon/Encoder.php',
        'Nette\\Neon\\Entity' => __DIR__ . '/..' . '/nette/neon/src/Neon/Entity.php',
        'Nette\\Neon\\Exception' => __DIR__ . '/..' . '/nette/neon/src/Neon/Exception.php',
        'Nette\\Neon\\Lexer' => __DIR__ . '/..' . '/nette/neon/src/Neon/Lexer.php',
        'Nette\\Neon\\Neon' => __DIR__ . '/..' . '/nette/neon/src/Neon/Neon.php',
        'Nette\\Neon\\Node' => __DIR__ . '/..' . '/nette/neon/src/Neon/Node.php',
        'Nette\\Neon\\Node\\ArrayItemNode' => __DIR__ . '/..' . '/nette/neon/src/Neon/Node/ArrayItemNode.php',
        'Nette\\Neon\\Node\\ArrayNode' => __DIR__ . '/..' . '/nette/neon/src/Neon/Node/ArrayNode.php',
        'Nette\\Neon\\Node\\BlockArrayNode' => __DIR__ . '/..' . '/nette/neon/src/Neon/Node/BlockArrayNode.php',
        'Nette\\Neon\\Node\\EntityChainNode' => __DIR__ . '/..' . '/nette/neon/src/Neon/Node/EntityChainNode.php',
        'Nette\\Neon\\Node\\EntityNode' => __DIR__ . '/..' . '/nette/neon/src/Neon/Node/EntityNode.php',
        'Nette\\Neon\\Node\\InlineArrayNode' => __DIR__ . '/..' . '/nette/neon/src/Neon/Node/InlineArrayNode.php',
        'Nette\\Neon\\Node\\LiteralNode' => __DIR__ . '/..' . '/nette/neon/src/Neon/Node/LiteralNode.php',
        'Nette\\Neon\\Node\\StringNode' => __DIR__ . '/..' . '/nette/neon/src/Neon/Node/StringNode.php',
        'Nette\\Neon\\Parser' => __DIR__ . '/..' . '/nette/neon/src/Neon/Parser.php',
        'Nette\\Neon\\Token' => __DIR__ . '/..' . '/nette/neon/src/Neon/Token.php',
        'Nette\\Neon\\TokenStream' => __DIR__ . '/..' . '/nette/neon/src/Neon/TokenStream.php',
        'Nette\\Neon\\Traverser' => __DIR__ . '/..' . '/nette/neon/src/Neon/Traverser.php',
        'Nette\\NotImplementedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\NotSupportedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\OutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\PhpGenerator\\Attribute' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Attribute.php',
        'Nette\\PhpGenerator\\ClassLike' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/ClassLike.php',
        'Nette\\PhpGenerator\\ClassManipulator' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/ClassManipulator.php',
        'Nette\\PhpGenerator\\ClassType' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/ClassType.php',
        'Nette\\PhpGenerator\\Closure' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Closure.php',
        'Nette\\PhpGenerator\\Constant' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Constant.php',
        'Nette\\PhpGenerator\\Dumper' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Dumper.php',
        'Nette\\PhpGenerator\\EnumCase' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/EnumCase.php',
        'Nette\\PhpGenerator\\EnumType' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/EnumType.php',
        'Nette\\PhpGenerator\\Extractor' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Extractor.php',
        'Nette\\PhpGenerator\\Factory' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Factory.php',
        'Nette\\PhpGenerator\\GlobalFunction' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/GlobalFunction.php',
        'Nette\\PhpGenerator\\Helpers' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Helpers.php',
        'Nette\\PhpGenerator\\InterfaceType' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/InterfaceType.php',
        'Nette\\PhpGenerator\\Literal' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Literal.php',
        'Nette\\PhpGenerator\\Method' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Method.php',
        'Nette\\PhpGenerator\\Parameter' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Parameter.php',
        'Nette\\PhpGenerator\\PhpFile' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/PhpFile.php',
        'Nette\\PhpGenerator\\PhpLiteral' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/PhpLiteral.php',
        'Nette\\PhpGenerator\\PhpNamespace' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/PhpNamespace.php',
        'Nette\\PhpGenerator\\Printer' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Printer.php',
        'Nette\\PhpGenerator\\PromotedParameter' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/PromotedParameter.php',
        'Nette\\PhpGenerator\\Property' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Property.php',
        'Nette\\PhpGenerator\\PropertyAccessMode' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/PropertyAccessMode.php',
        'Nette\\PhpGenerator\\PropertyHook' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/PropertyHook.php',
        'Nette\\PhpGenerator\\PropertyHookType' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/PropertyHookType.php',
        'Nette\\PhpGenerator\\PsrPrinter' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/PsrPrinter.php',
        'Nette\\PhpGenerator\\TraitType' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/TraitType.php',
        'Nette\\PhpGenerator\\TraitUse' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/TraitUse.php',
        'Nette\\PhpGenerator\\Traits\\AttributeAware' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/AttributeAware.php',
        'Nette\\PhpGenerator\\Traits\\CommentAware' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/CommentAware.php',
        'Nette\\PhpGenerator\\Traits\\ConstantsAware' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/ConstantsAware.php',
        'Nette\\PhpGenerator\\Traits\\FunctionLike' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/FunctionLike.php',
        'Nette\\PhpGenerator\\Traits\\MethodsAware' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/MethodsAware.php',
        'Nette\\PhpGenerator\\Traits\\NameAware' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/NameAware.php',
        'Nette\\PhpGenerator\\Traits\\PropertiesAware' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/PropertiesAware.php',
        'Nette\\PhpGenerator\\Traits\\PropertyLike' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/PropertyLike.php',
        'Nette\\PhpGenerator\\Traits\\TraitsAware' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/TraitsAware.php',
        'Nette\\PhpGenerator\\Traits\\VisibilityAware' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/VisibilityAware.php',
        'Nette\\PhpGenerator\\Type' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Type.php',
        'Nette\\PhpGenerator\\Visibility' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Visibility.php',
        'Nette\\Schema\\Context' => __DIR__ . '/..' . '/nette/schema/src/Schema/Context.php',
        'Nette\\Schema\\DynamicParameter' => __DIR__ . '/..' . '/nette/schema/src/Schema/DynamicParameter.php',
        'Nette\\Schema\\Elements\\AnyOf' => __DIR__ . '/..' . '/nette/schema/src/Schema/Elements/AnyOf.php',
        'Nette\\Schema\\Elements\\Base' => __DIR__ . '/..' . '/nette/schema/src/Schema/Elements/Base.php',
        'Nette\\Schema\\Elements\\Structure' => __DIR__ . '/..' . '/nette/schema/src/Schema/Elements/Structure.php',
        'Nette\\Schema\\Elements\\Type' => __DIR__ . '/..' . '/nette/schema/src/Schema/Elements/Type.php',
        'Nette\\Schema\\Expect' => __DIR__ . '/..' . '/nette/schema/src/Schema/Expect.php',
        'Nette\\Schema\\Helpers' => __DIR__ . '/..' . '/nette/schema/src/Schema/Helpers.php',
        'Nette\\Schema\\Message' => __DIR__ . '/..' . '/nette/schema/src/Schema/Message.php',
        'Nette\\Schema\\Processor' => __DIR__ . '/..' . '/nette/schema/src/Schema/Processor.php',
        'Nette\\Schema\\Schema' => __DIR__ . '/..' . '/nette/schema/src/Schema/Schema.php',
        'Nette\\Schema\\ValidationException' => __DIR__ . '/..' . '/nette/schema/src/Schema/ValidationException.php',
        'Nette\\SmartObject' => __DIR__ . '/..' . '/nette/utils/src/SmartObject.php',
        'Nette\\StaticClass' => __DIR__ . '/..' . '/nette/utils/src/StaticClass.php',
        'Nette\\UnexpectedValueException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Utils\\ArrayHash' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayHash.php',
        'Nette\\Utils\\ArrayList' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayList.php',
        'Nette\\Utils\\Arrays' => __DIR__ . '/..' . '/nette/utils/src/Utils/Arrays.php',
        'Nette\\Utils\\AssertionException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Callback' => __DIR__ . '/..' . '/nette/utils/src/Utils/Callback.php',
        'Nette\\Utils\\DateTime' => __DIR__ . '/..' . '/nette/utils/src/Utils/DateTime.php',
        'Nette\\Utils\\FileInfo' => __DIR__ . '/..' . '/nette/utils/src/Utils/FileInfo.php',
        'Nette\\Utils\\FileSystem' => __DIR__ . '/..' . '/nette/utils/src/Utils/FileSystem.php',
        'Nette\\Utils\\Finder' => __DIR__ . '/..' . '/nette/utils/src/Utils/Finder.php',
        'Nette\\Utils\\Floats' => __DIR__ . '/..' . '/nette/utils/src/Utils/Floats.php',
        'Nette\\Utils\\Helpers' => __DIR__ . '/..' . '/nette/utils/src/Utils/Helpers.php',
        'Nette\\Utils\\Html' => __DIR__ . '/..' . '/nette/utils/src/Utils/Html.php',
        'Nette\\Utils\\IHtmlString' => __DIR__ . '/..' . '/nette/utils/src/compatibility.php',
        'Nette\\Utils\\Image' => __DIR__ . '/..' . '/nette/utils/src/Utils/Image.php',
        'Nette\\Utils\\ImageColor' => __DIR__ . '/..' . '/nette/utils/src/Utils/ImageColor.php',
        'Nette\\Utils\\ImageException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ImageType' => __DIR__ . '/..' . '/nette/utils/src/Utils/ImageType.php',
        'Nette\\Utils\\Iterables' => __DIR__ . '/..' . '/nette/utils/src/Utils/Iterables.php',
        'Nette\\Utils\\Json' => __DIR__ . '/..' . '/nette/utils/src/Utils/Json.php',
        'Nette\\Utils\\JsonException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ObjectHelpers' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectHelpers.php',
        'Nette\\Utils\\Paginator' => __DIR__ . '/..' . '/nette/utils/src/Utils/Paginator.php',
        'Nette\\Utils\\Random' => __DIR__ . '/..' . '/nette/utils/src/Utils/Random.php',
        'Nette\\Utils\\Reflection' => __DIR__ . '/..' . '/nette/utils/src/Utils/Reflection.php',
        'Nette\\Utils\\ReflectionMethod' => __DIR__ . '/..' . '/nette/utils/src/Utils/ReflectionMethod.php',
        'Nette\\Utils\\RegexpException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Strings' => __DIR__ . '/..' . '/nette/utils/src/Utils/Strings.php',
        'Nette\\Utils\\Type' => __DIR__ . '/..' . '/nette/utils/src/Utils/Type.php',
        'Nette\\Utils\\UnknownImageFileException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Validators' => __DIR__ . '/..' . '/nette/utils/src/Utils/Validators.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit85bbd31dfad586de68f2df71adce1454::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85bbd31dfad586de68f2df71adce1454::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit85bbd31dfad586de68f2df71adce1454::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit85bbd31dfad586de68f2df71adce1454::$classMap;

        }, null, ClassLoader::class);
    }
}
