#! /usr/bin/env node

const yargs = require('yargs')
const argv = yargs.argv

const all = require('./index-all')
const sites = require('./index-sites')

yargs
    .command(all)
    .command(sites)
    .help()
    .argv



