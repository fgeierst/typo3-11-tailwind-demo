import { nodeResolve } from '@rollup/plugin-node-resolve';
import { terser } from 'rollup-plugin-terser';

export default {
  input: {
    Main: 'packages/tailwind_demo_base/Resources/Private/JavaScript/Main.js',
  },
  output: {
    dir: 'packages/tailwind_demo_base/Resources/Public/JavaScript/',
    format: 'iife',
  },
  plugins: [
    nodeResolve(),
    terser(),
  ],
};
