#! /usr/bin/env node

const yargs = require('yargs')
const argv = yargs.argv

const sync = require('./sync')

yargs.command(sync)
    .help()
    .argv



