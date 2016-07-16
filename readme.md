# Basic helpers to work with PHPSpec

[![Build Status](https://img.shields.io/travis/weew/helpers-phpspec.svg)](https://travis-ci.org/weew/helpers-phpspec)
[![Test Coverage](https://img.shields.io/coveralls/weew/helpers-phpspec.svg)](https://coveralls.io/github/weew/helpers-phpspec)
[![Version](https://img.shields.io/packagist/v/weew/helpers-phpspec.svg)](https://packagist.org/packages/weew/helpers-phpspec)
[![Licence](https://img.shields.io/packagist/l/weew/helpers-phpspec.svg)](https://packagist.org/packages/weew/helpers-phpspec)

## Table of contents

- [Installation](#installation)
- [Introduction](#introduction)
- [Functions](#functions)
    - [it](#it)

## Installation

`composer require weew/helpers-phpspec`

## Introduction

This tiny library provides various helper functions useful for work with phpspec.

## Functions

#### it

Wrap a value into a Subject to allow expectations to be made outside of the phpspec test suite / context.

`Bossa\PhpSpec\Expect\Subject it(mixed $subject)`
