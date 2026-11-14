# JSON Skeleton — V3

Keep every key, collapse arrays, blank the values. Strict first-item mode or merge-all-items mode, with a key-loss report.

[ ] Type hints instead of ""[ ] Show statistics

Paste JSON on the left (or drop a file), then click Transform + Verify.

Self-test: running…

```

```

## Input JSON

## Skeleton JSON

### Input (full original)

**0**Arrays

**0**Objects

**0**Keys

**0**Primitives

**0**Containers

### Output (skeleton)

**0**Arrays

**0**Objects

**0**Keys

**0**Primitives

**0**Containers

### Key-path coverage

**0**Distinct key paths in input

**0**Kept in output

**0**Dropped

Dropped key paths

```

```

**Rules and checks**

- **Strict:** every non-empty array keeps only its first element; empty arrays stay `[]`. **Merge:** array items are combined, so every key seen in any item is kept. Where types conflict at one path, object beats array beats primitive.
- Primitives become `""`, or `"string"`, `"number"`, `"boolean"`, `"null"` with type hints on (merged types are joined with `|`).
- Verification: rule check against the input, an output-only sweep (arrays have at most one item, leaves are valid), idempotence (skeleton of the skeleton is unchanged, hints off), and in merge mode a check that no key path was lost.
- Limits of `JSON.parse`: duplicate keys keep the last value, and integers beyond 253 lose precision. Neither affects the skeleton, but input counts reflect the parsed data.