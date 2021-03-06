<?php
/**
 * This file is part of PDepend.
 *
 * PHP Version 5
 *
 * Copyright (c) 2008-2017 Manuel Pichler <mapi@pdepend.org>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Manuel Pichler nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @copyright 2008-2017 Manuel Pichler. All rights reserved.
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
 * @since 0.9.20
 */

namespace PDepend\Source\Language\PHP;

use PDepend\AbstractTest;

/**
 * Test case for the {@link \PDepend\Source\Language\PHP\PHPParserGeneric} class.
 *
 * @copyright 2008-2017 Manuel Pichler. All rights reserved.
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
 * @since 2.1.0
 *
 * @covers \PDepend\Source\Language\PHP\AbstractPHPParser
 * @covers \PDepend\Source\Language\PHP\PHPParserGeneric
 * @group unittest
 * @link https://github.com/pdepend/pdepend/issues/180
 */
class PHPParserGenericVersion56Test extends AbstractTest
{
    /**
     * testShiftLeftInConstantInitializer
     *
     * @return void
     */
    public function testShiftLeftInConstantInitializer()
    {
        $class = $this->getFirstClassForTestCase();
        $const = $class->getChild(0);

        $this->assertInstanceOf('PDepend\\Source\\AST\\ASTConstantDefinition', $const);
    }

    /**
     * testShiftRightInConstantInitializer
     *
     * @return void
     */
    public function testShiftRightInConstantInitializer()
    {
        $class = $this->getFirstClassForTestCase();
        $const = $class->getChild(0);

        $this->assertInstanceOf('PDepend\\Source\\AST\\ASTConstantDefinition', $const);
    }

    /**
     * testShiftLeftInConstantInitializer
     *
     * @return void
     */
    public function testMultipleShiftLeftInConstantInitializer()
    {
        $class = $this->getFirstClassForTestCase();
        $const = $class->getChild(0);

        $this->assertInstanceOf('PDepend\\Source\\AST\\ASTConstantDefinition', $const);
    }

    /**
     * testShiftRightInConstantInitializer
     *
     * @return void
     */
    public function testMultipleShiftRightInConstantInitializer()
    {
        $class = $this->getFirstClassForTestCase();
        $const = $class->getChild(0);

        $this->assertInstanceOf('PDepend\\Source\\AST\\ASTConstantDefinition', $const);
    }

    /**
     * testConstantSupportForScalarArrayValues
     *
     * @return void
     * @link https://github.com/pdepend/pdepend/issues/209
     */
    public function testConstantSupportForArrayWithValues()
    {
        $class = $this->getFirstClassForTestCase();
        $const = $class->getChild(0);

        $this->assertInstanceOf('PDepend\\Source\\AST\\ASTConstantDefinition', $const);
    }

    /**
     * testConstantSupportForArrayWithKeyValuePairs
     *
     * @return void
     * @link https://github.com/pdepend/pdepend/issues/209
     */
    public function testConstantSupportForArrayWithKeyValuePairs()
    {
        $class = $this->getFirstClassForTestCase();
        $const = $class->getChild(0);

        $this->assertInstanceOf('PDepend\\Source\\AST\\ASTConstantDefinition', $const);
    }

    /**
     * testConstantSupportForArrayWithSelfReferenceInClass
     *
     * @return void
     * @link https://github.com/pdepend/pdepend/issues/192
     */
    public function testConstantSupportForArrayWithSelfReferenceInClass()
    {
        $class = $this->getFirstClassForTestCase();
        $const = $class->getChild(0);

        $this->assertInstanceOf('PDepend\\Source\\AST\\ASTConstantDefinition', $const);
    }

    /**
     * testConstantSupportForArrayWithSelfReferenceInInterface
     *
     * @return void
     * @link https://github.com/pdepend/pdepend/issues/192
     */
    public function testConstantSupportForArrayWithSelfReferenceInInterface()
    {
        $class = $this->getFirstInterfaceForTestCase();
        $const = $class->getChild(0);

        $this->assertInstanceOf('PDepend\\Source\\AST\\ASTConstantDefinition', $const);
    }

    /**
     * testComplexExpressionInParameterInitializer
     *
     * @return void
     */
    public function testComplexExpressionInParameterInitializer()
    {
        $node = $this->getFirstFunctionForTestCase()
            ->getFirstChildOfType('PDepend\\Source\\AST\\ASTFormalParameter');

        $this->assertNotNull($node);
    }

    /**
     * testComplexExpressionInConstantDeclarator
     *
     * @return void
     */
    public function testComplexExpressionInConstantDeclarator()
    {
        $node = $this->getFirstClassForTestCase()
            ->getFirstChildOfType('PDepend\\Source\\AST\\ASTConstantDeclarator');

        $this->assertNotNull($node);
    }

    /**
     * testComplexExpressionInFieldDeclaration
     *
     * @return void
     */
    public function testComplexExpressionInFieldDeclaration()
    {
        $node = $this->getFirstClassForTestCase()
            ->getFirstChildOfType('PDepend\\Source\\AST\\ASTFieldDeclaration');

        $this->assertNotNull($node);
    }

    /**
     * testPowExpressionInMethodBody
     *
     * @return void
     */
    public function testPowExpressionInMethodBody()
    {
        $node = $this->getFirstClassForTestCase()
            ->getFirstChildOfType('PDepend\\Source\\AST\\ASTReturnStatement');

        $this->assertSame('**', $node->getChild(0)->getChild(1)->getImage());
    }

    /**
     * testPowExpressionInFieldDeclaration
     *
     * @return void
     */
    public function testPowExpressionInFieldDeclaration()
    {
        $node = $this->getFirstClassForTestCase()
            ->getFirstChildOfType('PDepend\\Source\\AST\\ASTFieldDeclaration');

        $this->assertNotNull($node);
    }

    /**
     * @return void
     */
    public function testEllipsisOperatorInFunctionCall()
    {
        $this->assertNotNull($this->parseCodeResourceForTest());
    }
}
