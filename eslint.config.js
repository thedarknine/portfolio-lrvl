import html from "@html-eslint/eslint-plugin";

export default [
    {
        ...html.configs["flat/recommended"],
        files: ["resources/**/*.blade.php"],
        ignores: ["resources/views/welcome.blade.php"],
        rules: {
            "@html-eslint/attrs-newline": ["error", {
                "closeStyle": "sameline",
                "ifAttrsMoreThan": 8, 
            }],
            "@html-eslint/sort-attrs": ["error", {
                "priority": ["id", "type", "class", "style", "src"]
            }],
        },
    }
];